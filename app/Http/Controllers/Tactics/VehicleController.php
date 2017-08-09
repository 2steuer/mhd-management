<?php

namespace App\Http\Controllers\Tactics;

use App\Http\Controllers\Base\CrudController;
use App\Http\Controllers\Base\RankedCrudController;
use App\Model\Tactics\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class VehicleController extends RankedCrudController
{
    protected $human_plural = "Fahrzeuge";
    protected $human_singular = 'Fahrzeug';
    protected $model_plural = 'tactics.vehicles';
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
