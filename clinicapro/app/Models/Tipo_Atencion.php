<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Atencion extends Model
{
     protected $table ='tipo_atencion';

    protected $fillable = ['id_tipo','descripcion'];
    public $timestamps =false;
}
