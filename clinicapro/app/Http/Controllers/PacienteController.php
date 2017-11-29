<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

use App\Http\Requests;

class PacienteController extends Controller
{
    public function create(Request $request){
    	$paciente =new Paciente();

    	$paciente -> nombres =$request -> nombre;
    	$paciente -> apellidos =$request -> apellidos;
    	$paciente -> celular =$request -> celular;
    	$paciente -> dni =$request -> dni;
    	$paciente -> fech_nac =$request -> fenacimiento;
    	$paciente -> peso =$request -> peso;
    	$paciente -> talla =$request -> talla;
    	$paciente -> direccion =$request -> direccion;
    	$paciente -> Estado_civil =$request -> estcivil;
    	$paciente -> save();

    	return redirect('/registropaciente');
    }

    public function vista()
	{
		$paciente = Paciente::all();
		return view('registrop',['paciente'=>$paciente]);
	}

    public function actualizar($id)
    {
        $paciente = Paciente::find($id);
        return view('edit_paciente',['paciente'=>$paciente]);
    }

    public function update($id,Request $request)
    {
        $paciente = Paciente::find($id);
        $paciente = fill($request->all());
        $paciente = save;
        return redirect('/registropaciente');
    }


}
