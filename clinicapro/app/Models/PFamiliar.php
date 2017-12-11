<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Estado;
use App\Models\Metodo;

class PFamiliar extends Model
{
    protected $table ='pfamiliar';
    protected $primaryKey = 'id_atencion';

    protected $fillable = ['id_Metodo','id_Estado','fecha_programada'];

    public $timestamps =false;

        public function metodo()
    {
       return $this->hasOne(Metodo::class,'id_Metodo','id_Metodo');
    }
    public function estado()
    {
       return $this->hasOne(Estado::class,'id_Estado','id_Estado');
    }

}
