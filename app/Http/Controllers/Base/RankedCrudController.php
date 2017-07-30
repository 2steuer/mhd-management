<?php

namespace App\Http\Controllers\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

abstract class RankedCrudController extends CrudController
{
    protected function getModels()
    {
        return $this->model->orderBy('rank', 'asc')->get();
    }

    protected function preStoreActions(array $data)
    {
        $data = parent::preStoreActions($data);
        $data['rank'] = $this->model->max('rank') + 1;
        return $data;
    }

    protected function preDeleteActions(Model $model, Request $request)
    {
        $models = $this->model->where('rank', '>', $model->rank)->get();

        foreach($models as $model)
        {
            $model->rank--;
            $model->save();
        }
    }

    public function moveUp(Request $request, $id)
    {
        $model = $this->getModel($id);

        if($model->rank > 1)
        {
            DB::transaction(function() use ($model)
            {
                $newRank = $model->rank - 1;

                $oldModel = $this->model->where('rank', $newRank)->first();
                $oldModel->rank++;
                $oldModel->save();

                $model->rank = $newRank;
                $model->save();
            });

            Session::flash('alert', 'Reihenfolge angepasst');
        }

        return redirect()->route($this->model_plural.'.index');
    }

    public function moveDown(Request $request, $id)
    {
        $model = $this->getModel($id);

        if($model->rank < $this->model->max('rank'))
        {
            DB::transaction(function() use ($model)
            {
                $newRank = $model->rank + 1;

                $oldModel = $this->model->where('rank', $newRank)->first();
                $oldModel->rank--;
                $oldModel->save();

                $model->rank = $newRank;
                $model->save();
            });

            Session::flash('alert', 'Reihenfolge angepasst');
        }

        return redirect()->route($this->model_plural.'.index');
    }
}
