<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'abbreviation',
        'license',
        'description',
        'rank',
        'radio_name'
    ];
}
