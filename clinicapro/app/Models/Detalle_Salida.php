<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Salida extends Model
{
    
    protected $table ='detalle_salida';
    protected $primaryKey = 'id_salida';
    protected $fillable = ['id_insumos','cantidad'];
    public $timestamps =false;
}
