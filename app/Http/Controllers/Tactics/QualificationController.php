<?php

namespace App\Http\Controllers\Tactics;

use App\Http\Controllers\Base\RankedCrudController;
use App\Model\Tactics\Qualification;
use Illuminate\Http\Request;

class QualificationController extends RankedCrudController
{
    protected $human_singular = 'Qualifikation';
    protected $human_plural = 'Qualifikationen';
    protected $model_plural = 'tactics.qualifications';
    protected $model_singular = 'qualification';

    protected $rules = [
        'name' => 'required',
        'abbreviation' => 'required',
        'color1' => 'required',
        'color2' => 'required',
        'text_color' => 'required'
    ];

    public function __construct(Qualification $model)
    {
        $this->model = $model;
    }
}
