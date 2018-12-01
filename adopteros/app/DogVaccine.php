<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DogVaccine extends Model
{
    protected $table = 'dog_vaccine';
    protected $fillable = ['id','dog_id','vaccine_id','ultima_fecha','proxima_fecha'];

    protected $dates = ['created_at','updated_at'];
}
