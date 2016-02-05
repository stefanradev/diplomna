<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BodyMeasures extends Model
{
    protected $fillable = [
        'age', 'gender', 'hair_color', 'hair_lenght', 'eye_color', 'height', 'weight',
    ];

}
