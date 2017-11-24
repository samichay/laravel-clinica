<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

use App\Http\Requests;

class UsuarioControlador extends Controller
{
	//Funcion que contiene los metodos de la pagina principal de los usuarios
    public function index()
    {
/*        @if (Auth::guest())
            return 'Jodase';
        @else*/
            $usuarios= Usuario::all('nombres','apellidos','nick','tipo_usuario');
            return view('usuario.index')
            ->with('usuarios',$usuarios)
            ->with('titulo','Pagina inicial de usuarios');
            // o usar compact($usuarios) dentro del view pa especificar variables a llevar a la vista
    /*    @endif
    */}

    public function datos_usuario($id)
    {
        $datos_usuario=Usuario::find($id)->first();
        //dd(Usuario::find($id));
    	return view('usuario.mostrar_usuario')
    	->with('id',$id)
        ->with('datos_usuario',$datos_usuario);
    }

}
