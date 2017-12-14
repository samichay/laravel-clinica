<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Atencion;
use App\Models\Paciente;
use App\Models\Insumos;
use DB;
use Carbon\Carbon;
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
        $pacientes=$pacientes->count();
        $insumos=$insumos->count();
          $user  =Atencion::select(DB::raw('sum(precio) as precio2, day(fecha_atencion)'))->whereDate('fecha_atencion', '>', Carbon::now()->subDays(1005)->format('Y-m-d'))->groupBy('fecha_atencion')->get();
/*          dd($user);
*/        return view('inicio')
            ->with('usuarios', $usuarios)
            ->with('atenciones', $atenciones)
            ->with('pacientes', $pacientes)
            ->with('insumos', $insumos)
            ->with('user', $user);

    }

}
