<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PacienteCrearRequest; 
use App\Http\Requests\PacienteUpdateRequest; 
use App\Models\Paciente;
use Session;
use Redirect;

class PacienteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::Paginate(20);
        return view('registrop',['pacientes'=>$pacientes]);
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
    public function store(PacienteCrearRequest $request)
    {
        $paciente =new Paciente();
        $paciente -> nombres =$request -> nombres;
        $paciente -> apellidos =$request -> apellidos;
        $paciente -> celular =$request -> celular;
        $paciente -> dni =$request -> dni;
        $paciente -> fech_nac =$request -> fenacimiento;
        $paciente -> peso =$request -> peso;
        $paciente -> talla =$request -> talla;
        $paciente -> direccion =$request -> direccion;
        $paciente -> Estado_civil =$request -> estcivil;
        $paciente -> save();
         Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('/paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return view('edit_paciente',['paciente'=>$paciente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteUpdateRequest $request, $id)
    {
        $paciente = Paciente::find($id);
        $paciente->fill($request->all());
        $paciente->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/paciente');
/*
        return redirect('/paciente');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Paciente::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/paciente');
    }
}
