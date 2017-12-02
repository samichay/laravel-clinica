<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    protected $table ='insumos';

    protected $primaryKey = 'id_insumos';
    protected $fillable = ['nombre','stock','descripcion'];
    public $timestamps =false;
}
