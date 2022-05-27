<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConsultaController as Consulta;

class ViewController extends Controller
{
    protected $Consulta;

    public function __construct(Consulta $Consulta)
    {
        $this->Consulta = $Consulta;
    }
    
    public function index()
    {

    }

    public function dashboard()
    {
        $consultas = $this->Consulta->allPaginate();

        //dd($consultas);
        return view('dashboard', [ 'consultas' => $consultas ]);
    }
}
