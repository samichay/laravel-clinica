<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atencion;
use App\Models\Tipo_Atencion;
use App\Models\Paciente;
use App\Models\Usuario;
use App\Models\Metodo;
use App\Models\Estado;
use App\Models\Muestra;
use App\Models\Papanicolao;
use App\Models\Otros;
use App\Models\PFamiliar;
use App\Http\Requests;
use Carbon\Carbon;
use Session;
use Redirect;
use Auth;

class AtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $atenciones = Atencion::nombre($request->get('nombre'))
        ->orderBy('fecha_atencion','desc')
        ->orderBy('hora_atencion','desc')
        ->Paginate(20);

        $tipo_atenciones=Tipo_Atencion::pluck('descripcion','id_tipo');
        $tipo_metodo=Metodo::pluck('Metodocol','id_Metodo');
        $tipo_estado=Estado::pluck('nombre','id_Estado');
        $tipo_muestra=Muestra::pluck('nombre','id_Muestra');
        $nombre_pac=Paciente::pluck('nombres','id_paciente');
        $nombre_users=Usuario::pluck('nick','id_usuario');
        return view('atencion.index',compact('atenciones','tipo_atenciones','nombre_pac','nombre_users','tipo_metodo','tipo_estado','tipo_muestra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $now = new \DateTime();
        $atencion =new Atencion();
        $atencion -> id_paciente =$request -> id_paciente;
        $atencion -> id_tipo =$request -> id_tipo;
        $atencion -> precio =$request -> precio;
        $atencion -> observaciones =$request -> observaciones;
        $atencion -> fecha_atencion =Carbon::now();
        $atencion -> hora_atencion =Carbon::now();
        $atencion -> id_usuario =Auth::user()->id_usuario;
        $atencion -> save();
        $id = Atencion::all()->last()->id_atencion;
        switch ($request->id_tipo) {
            case 1: //papanicolao
                $atencion_papa = new Papanicolao();
                $atencion_papa -> id_atencion = $id;
                $atencion_papa -> id_Muestra=$request-> id_muestra;
                $atencion_papa -> fecha_periodo=$request-> fecha_periodo;
                $atencion_papa -> hijos=$request-> hijos;
                $atencion_papa -> fecha_entrega=$request-> fecha_entrega;
                $atencion_papa -> fecha_recepcion=$request-> fecha_recepcion;
                $atencion_papa -> fecha_envio=$request-> fecha_envio;
                $atencion_papa -> estado=$request-> estado;
                $atencion_papa -> laboratorio=$request-> laboratorio;
                $atencion_papa->save();                
                break;
            case 2: //otros
                $atencion_otros = new Otros();
                $atencion_otros -> id_atencion = $id;
                $atencion_otros->descripcion = $request-> descripcion;
                $atencion_otros->save();
                break;            
            case 3: //pfamiliar
                $atencion_pfamiliar = new PFamiliar;
                $atencion_pfamiliar-> id_atencion = $id;
                $atencion_pfamiliar->id_Metodo = $request->id_Metodo;
                $atencion_pfamiliar->id_Estado = $request->id_Estado;
                $atencion_pfamiliar->fecha_programada = $request->fecha_programada;
                $atencion_pfamiliar->save();
                break;  
            default:
                break;
        }
        Session::flash('message','Atención creada Correctamente');
        return Redirect::to('/atencion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atencion = Atencion::find($id);
        $tipo_atenciones=Tipo_Atencion::pluck('descripcion','id_tipo');
        $tipo_metodo=Metodo::pluck('Metodocol','id_Metodo');
        $tipo_estado=Estado::pluck('nombre','id_Estado');
        $tipo_muestra=Muestra::pluck('nombre','id_Muestra');
        return view('atencion.edit_atencion',compact('atencion','tipo_atenciones','tipo_metodo','tipo_estado','tipo_muestra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $atencion = Atencion::find($id);
        $atencion->fill($request->all());
        $atencion->save();
        switch ($atencion->id_tipo) {
            case 1: //papanicolao
                $atencion_papa = Papanicolao::find($id);
                $atencion_papa->fill($request->all());
                $atencion_papa->save();                
                break;
            case 2: //otros
                $atencion_otros = Otros::find($id);
                $atencion_otros->fill($request->all());
                $atencion_otros->save();
                break;            
            case 3: //pfamiliar
                $atencion_pfamiliar = PFamiliar::find($id);
                $atencion_pfamiliar->fill($request->all());
                $atencion_pfamiliar->save();
                break;
            default:
                break;
        }
        Session::flash('message','Atencion actualizada Correctamente');
        return Redirect::to('/atencion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function papa(){
        $papa = Papanicolao::paginate(20);
        return view('atencion.papanicolao',compact('papa',$papa));
    }
}
