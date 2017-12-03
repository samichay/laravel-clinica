<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Usuario extends Model implements Authenticatable
{
	use AuthenticableTrait;

    protected $table ='usuario';
    protected $fillable = ['nombres', 'apellidos', 'nick', 'password', 'tipo_usuario'];
    
    protected $primaryKey = 'id_usuario';

    public static function Busqueda_nombre($nombre)
    {
    	return static::where(compact('nombres'))->first();
    }

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function scopeNombre($query,$name)
    {
        if(trim($name) != "")
        {
            $query->where(\DB::raw("CONCAT(nombres,' ',apellidos)"),"LIKE","%$name%");
        }
    }
//    Puede servir pa comprobar algun campo del usuario
/*	public function isAdmin()
	{
	    return $this->email === 'email@gmail.com';
	}
*/
}
