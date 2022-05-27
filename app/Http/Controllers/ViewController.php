<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConsultaController as Consulta;
use App\Http\Controllers\UserController as User;

class ViewController extends Controller
{
    protected $Consulta;
    protected $User;

    public function __construct(Consulta $Consulta, User $User)
    {
        $this->Consulta = $Consulta;
        $this->User = $User;
    }
    
    public function index()
    {
        if(session('email')){
            return redirect('/dashboard');
        }

        return view('index');
    }

    public function login(Request $request)
    {
        $data = $request->input();
        $response = $this->User->validateUser($data);

        if(!$response){
            return redirect()->back()->withWarning( 'Login Incorreto' );
        }

        session(['email' => $data['email'] ]);
        return redirect('/dashboard');

    }

    public function logOut()
    {
        session()->forget('email');
        session()->flush();
        return redirect('/');
    }

    public function dashboard()
    {
        if(!session('email')){
            return redirect('/');
        }

        $consultas = $this->Consulta->allPaginate();
        return view('dashboard', [ 'consultas' => $consultas ]);
    }
}
