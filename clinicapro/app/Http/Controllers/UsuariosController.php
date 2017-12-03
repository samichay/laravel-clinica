<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Session;
use Redirect;
use App\Http\Requests;

class UsuariosController extends Controller
{
     public function __construct(){
     $this->middleware('auth');
    }
    /**s
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::Paginate(3);
        return view('usuario.index',['usuarios'=>$usuarios]);
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
        $usuarios =new Usuario();
        $usuarios -> nombres =$request -> nombres;
        $usuarios -> apellidos =$request -> apellidos;
        $usuarios -> nick =$request -> nick;
        $usuarios -> tipo_usuario =$request -> tipo_usuario;
        $usuarios -> save();
        Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *//*
*/    public function show($id)
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
     /*   $insumo = Insumos::find($id);
        return view('insumo.edit_insumo',['insumo'=>$insumo]);*/
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
        /*$insumo = Insumos::find($id);
        $insumo->fill($request->all());
        $insumo->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('/insumo');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        /*Insumos::destroy($id);
        Session::flash('message','Insumo Eliminado Correctamente');
        return Redirect::to('/insumo');*/
    }
}
