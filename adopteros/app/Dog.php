<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable = ['nombreadopteros','nombrenuevo','chapita','extra','fecha_nac','castrado','foto'];

    protected $dates = ['created_at','updated_at','fecha_nac'];
    
}
