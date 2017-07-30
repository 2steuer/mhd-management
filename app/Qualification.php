<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
        'name',
        'abbreviation',
        'rank',
        'color1',
        'color2',
        'text_color'
    ];
}
