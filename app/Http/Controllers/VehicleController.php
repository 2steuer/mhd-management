<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\CrudController;
use App\Http\Controllers\Base\RankedCrudController;
use App\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class VehicleController extends RankedCrudController
{
    protected $human_plural = "Fahrzeuge";
    protected $human_singular = 'Fahrzeug';
    protected $model_plural = 'vehicles';
    protected $model_singular = 'vehicle';

    protected $rules = [
        'name' => 'required',
        'abbreviation' => 'required'
    ];

    public function __construct(Vehicle $model)
    {
        $this->model = $model;
    }

}
