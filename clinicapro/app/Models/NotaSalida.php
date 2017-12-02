<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotaSalida extends Model
{
    protected $table ='notasalida';

    protected $primaryKey = 'id_salida';
    protected $fillable = ['id_atencion'];
    public $timestamps =false;
}
