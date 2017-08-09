<?php

namespace App\Model\Tactics;

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
