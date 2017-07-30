<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\RankedCrudController;
use App\TacticalQualification;
use Illuminate\Http\Request;

class TacticalQualificationController extends RankedCrudController
{
    protected $human_singular = 'Taktische Qualifikation';
    protected $human_plural = 'Taktische Qualifikationen';
    protected $model_plural = 'tactical_qualifications';
    protected $model_singular = 'tactical_qualification';

    protected $rules = [
        'name' => 'required',
        'abbreviation' => 'required',
        'color1' => 'required',
        'color2' => 'required',
        'text_color' => 'required'
    ];

    public function __construct(TacticalQualification $model)
    {
        $this->model = $model;
    }
}
