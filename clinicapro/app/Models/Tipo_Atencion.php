<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Atencion extends Model
{
    protected $table ='tipo_atencion';
    protected $primaryKey = 'id_tipo';

    protected $fillable = ['descripcion'];
    public $timestamps =false;
}
