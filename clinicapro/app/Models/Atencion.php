<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo_Atencion;
use App\Models\Paciente;
use App\Models\Usuario;
use App\Models\PFamiliar;
use App\Models\Otros;
use App\Models\Papanicolao;

class Atencion extends Model
{
    
    protected $table ='atencion';

    protected $primaryKey = 'id_atencion';
    protected $fillable = ['fecha_atencion','hora_atencion','observaciones','precio','id_tipo','id_paciente','id_usuario'];
    public $timestamps =false;

    public function scopeNombre($query,$nombre)
    {        
     /*   return $query->whereHas('pacientes', function ($query) {
            $query->Nombre($nombre);
        });
*/
        $query->where('precio',"LIKE","%$nombre%");

    }


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

    public function pfamiliar()
     {
       return $this->hasOne(PFamiliar::class, 'id_atencion', 'id_atencion');
     }

    public function otros()
     {
       return $this->hasOne(Otros::class, 'id_atencion', 'id_atencion');
     }

    public function papanicolao()
     {
       return $this->hasOne(Papanicolao::class, 'id_atencion', 'id_atencion');
     }

 


}
