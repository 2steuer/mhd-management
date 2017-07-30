<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TacticalQualification extends Model
{
    protected $fillable = [
        'name',
        'abbreviation',
        'color1',
        'color2',
        'text_color'
    ];
}
