<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    
    protected $table ='paciente';

    protected $fillable = ['nombres', 'apellidos', 'celular', 'dni', 'fech_nac','peso','talla','direccion','Estado_civil'];
    protected $primaryKey = 'id_paciente';
    public $timestamps =false;

	public function scopeNombre($query,$name)
	{
		if(trim($name) != "")
		{
			$query->where('nombres',"LIKE","%$name%");
		}
	}
}