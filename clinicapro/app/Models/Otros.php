<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otros extends Model
{
    protected $table ='otros';

    protected $primaryKey = 'id_atencion';
    protected $fillable = ['descripcion'];
    public $timestamps =false;
}
