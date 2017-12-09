<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Papanicolao;
use Session;
use Redirect;

class InicioController extends Controller
{
    function contar(){
    //eviaremos los datos 
    $papanicolao = new Papanicolao;
    $papanicolao =Papanicolao::all();
    return view('inicio',['papanicola'=>$papanicolao]);
    //return view('inicio',['papanicolao'=>$papanicolao]);
    }
}
