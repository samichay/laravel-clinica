<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insumos;
use App\Http\Requests;
use App\Http\Requests\InsumosUpdateRequest;
use Session;
use Redirect;

class InsumosController extends Controller
{
     public function __construct(){
     $this->middleware('auth');
    }
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $insumos = Insumos::nombre($request->get('nombre'))
        ->Paginate(20);
        return view('insumo.index',['insumos'=>$insumos]);
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
        $insumos =new Insumos();
        $insumos -> nombre =$request -> nombre;
        $insumos -> stock =$request -> stock;
        $insumos -> descripcion =$request -> descripcion;
        $insumos -> save();
        Session::flash('message','Insumo Creado Correctamente');
        return Redirect::to('/insumo');
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
        $insumo = Insumos::find($id);
        return view('insumo.edit_insumo',['insumo'=>$insumo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InsumosUpdateRequest $request, $id)
    {
        $insumo = Insumos::find($id);
        $insumo->fill($request->all());
        $insumo->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/insumo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Insumos::destroy($id);
        Session::flash('message','Insumo Eliminado Correctamente');
        return Redirect::to('/insumo');
    }
}
