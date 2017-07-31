<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverLicense extends Model
{
    protected $fillable = [
        'name',
        'description',
        'rank',
        'color1',
        'color2',
        'text_color'
    ];

    public function css_class()
    {
        return 'license-'.$this->id;
    }
}
