<?php

namespace App\Model\Tactics;

use Illuminate\Database\Eloquent\Model;

class TacticalQualification extends Model
{
    protected $fillable = [
        'name',
        'abbreviation',
        'color1',
        'color2',
        'text_color',
        'rank'
    ];

    public function css_class()
    {
        return 'tactical-'.$this->id;
    }
}
