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
        return view('index');
    }

    public function login(Request $request)
    {
        $data = $request->input();
        $reponse = $this->User->validateUser($data);

        if(!$reponse){
            dd('Nao Achei');
        }

        dd('Achei');

    }

    public function dashboard()
    {
        $consultas = $this->Consulta->allPaginate();

        return view('dashboard', [ 'consultas' => $consultas ]);
    }
}
