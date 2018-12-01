<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DogAdopter extends Model
{
    protected $table = 'dog_adopter';
    protected $fillable = ['id','adopter_id','dog_id','fecha'];

    protected $dates = ['created_at','updated_at'];
}
