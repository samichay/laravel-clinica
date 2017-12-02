<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Papanicolao extends Model
{
    
    protected $table ='papanicolao';

    protected $primaryKey = 'id_atencion';
    protected $fillable = ['id_Muestra','fecha_periodo','hijos','fecha_entrega','fecha_recepcion','fecha_envio','estado','laboratorio'];
    public $timestamps =false;
}
