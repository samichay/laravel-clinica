<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table ='estado';

    protected $primaryKey = 'id_Estado';
    protected $fillable = ['nombre'];
    public $timestamps =false;
}
