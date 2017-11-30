<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
    
    protected $table ='atencion';

    protected $primaryKey = 'id_atencion';
    protected $fillable = ['fecha_atencion','hora_atencion','observaciones','precio','id_tipo','id_paciente','id_usuario'];
    public $timestamps =false;
    public function paciente()
       {
          return $this->hasMany('App\Models\Paciente', 'id_paciente', 'id_paciente');
       }

}
