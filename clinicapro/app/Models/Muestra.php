<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
     protected $table ='muestra';

    protected $primaryKey = 'id_Muestra';
    protected $fillable = ['nombre'];
    public $timestamps =false;
}
