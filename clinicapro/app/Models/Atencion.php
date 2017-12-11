<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo_Atencion;
use App\Models\Paciente;
use App\Models\Usuario;

class Atencion extends Model
{
    
    protected $table ='atencion';

    protected $primaryKey = 'id_atencion';
    protected $fillable = ['fecha_atencion','hora_atencion','observaciones','precio','id_tipo','id_paciente','id_usuario'];
    public $timestamps =false;
/*
    public function scopePrecio($query,$precio)
    {
        if(trim($precio) != "")
        {
            $query->where(\DB::raw("precio","LIKE","%$precio%");
        }
    }*/
    public function tipoatencion()
    {
       return $this->hasOne(Tipo_Atencion::class,'id_tipo','id_tipo');
    }

    public function pacientes()
     {
       return $this->hasOne(Paciente::class, 'id_paciente', 'id_paciente');
     }
    
    public function usuarios()
     {
       return $this->hasOne(Usuario::class, 'id_usuario', 'id_usuario');
     }

}
