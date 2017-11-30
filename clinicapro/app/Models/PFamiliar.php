<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PFamiliar extends Model
{
    protected $table ='pfamiliar';
    protected $primaryKey = 'id_atencion';

    protected $fillable = ['id_Metodo','id_Estado','fecha_programada'];

    public $timestamps =false;
}
