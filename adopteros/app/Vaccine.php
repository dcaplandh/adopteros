<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $table = 'vaccinations';
    protected $fillable = ['id','vacuna','datos'];

    protected $dates = ['created_at','updated_at'];
}
