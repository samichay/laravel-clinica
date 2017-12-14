<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\muestra;
class Papanicolao extends Model
{
    
    protected $table ='papanicolao';

    protected $primaryKey = 'id_atencion';
    protected $fillable = ['id_Muestra','fecha_periodo','hijos','fecha_entrega','fecha_recepcion','fecha_envio','estado','laboratorio'];
    public $timestamps =false;
        public function muestra()
    {
       return $this->hasOne(muestra::class,'id_muestra','id_muestra');
    }

}
