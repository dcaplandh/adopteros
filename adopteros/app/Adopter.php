<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    protected $fillable = ['id','nombre','apellido','direccion','telefono','datos','dni'];

    protected $dates = ['created_at','updated_at'];
}
