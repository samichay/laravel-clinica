<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Atencion;
use App\Models\Paciente;
use App\Models\Insumos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function inicio()
    {
        $usuarios = Usuario::all();
        $atenciones = Atencion::all();
        $pacientes = Paciente::all();
        $insumos = Insumos::all();
    
        $usuarios= $usuarios->count();
        $atenciones=$atenciones->count();
        $pacientes=$pacientes->count();;
        $insumos=$insumos->count();
    
        return view('inicio')
            ->with('usuarios', $usuarios)
            ->with('atenciones', $atenciones)
            ->with('pacientes', $pacientes)
            ->with('insumos', $insumos);
    }

}
