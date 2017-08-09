<?php

namespace App\Http\Controllers\Tactics;

use App\Model\Tactics\DriverLicense;
use App\Http\Controllers\Base\RankedCrudController;
use Illuminate\Http\Request;

class DriverLicenseController extends RankedCrudController
{
    protected $human_plural = 'Führerscheinklassen';
    protected $human_singular = 'Führerscheinklasse';
    protected $model_singular = 'driver_license';
    protected $model_plural = 'tactics.driver_licenses';

    protected $rules = [
        'name' => 'required',
        'color1' => 'required',
        'color2' => 'required',
        'text_color' => 'required'
    ];

    public function __construct(DriverLicense $model)
    {
        $this->model = $model;
    }
}
