<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{   
    protected $table ='informacion';
    protected $fillable = ['ubicacion','horario_ingreso','horario_salida','telefono'];
    public $timestamps =false;
}
