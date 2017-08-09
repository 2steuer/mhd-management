<?php

namespace App\Http\Controllers\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

abstract class CrudController extends Controller
{
    /**
     * @var Model
     */
    protected $model = null;

    protected $rules = [];
    protected $rules_messages = [];

    protected $model_singular = 'model';
    protected $model_plural = 'models';

    protected $human_singular = 'Generic';
    protected $human_plural = 'Generics';

    public function index(Request $request)
    {
        if(View::exists('pages.'.$this->model_plural.'.index'))
        {
            return view('pages.'.$this->model_plural.'.index', [$this->model_plural => $this->getModels()]);
        }
        else
        {
            return view('pages.generic.index', $this->getViewData(['models' => $this->getModels()]));
        }
    }

    public function create(Request $request)
    {
        if(View::exists('pages.'.$this->model_plural.'.create'))
        {
            return view('pages.'.$this->model_plural.'.create');
        }
        else
        {
            return view('pages.generic.create', $this->getViewData());
        }
    }

    public function store(Request $request)
    {
        $this->getValidator($request)->validate();

        $data = $this->preStoreActions($request->all());

        $model = $this->model->create($data);
        $model->save();

        $this->postStoreActions($model, $request);

        Session::flash('alert', $this->human_singular . ' angelegt');

        return redirect()->route($this->model_plural . '.index');
    }

    protected function preStoreActions(array $data)
    {
        return $data;
    }

    protected function postStoreActions(Model $model, Request $request)
    {

    }

    public function edit(Request $request, $id)
    {
        $model = $this->getModel($id);

        if(View::exists('pages.'.$this->model_plural.'.edit'))
        {
            return view('pages.'.$this->model_plural.'.edit', [$this->model_singular => $model]);
        }
        else
        {
            return view('pages.generic.edit', array_merge(['model' => $model], $this->getViewData([], $model)));
        }
    }

    protected function preUpdateActions(Model $model, array $data)
    {
        return $data;
    }

    protected function postUpdateActions(Model $model, Request $request)
    {

    }

    public function update(Request $request, $id)
    {
        $model  = $this->getModel($id);

        $data = $this->preUpdateActions($model, $request->all());
        $model->update($data);
        $model->save();

        $this->postUpdateActions($model, $request);

        Session::flash('alert', $this->human_singular. ' geändert.');

        return redirect()->route($this->model_plural . '.index');
    }

    public function confirmdelete(Request $request, $id)
    {
        $model = $this->model->findOrFail($id);

        if(View::exists('pages.'.$this->model_plural.'.confirmdelete'))
        {
            return view('pages.'.$this->model_plural.'.confirmdelete', [$this->model_singular => $model]);
        }
        else
        {
            return view('pages.generic.confirmdelete', $this->getViewData(['model' => $model], $model));
        }
    }

    public function destroy(Request $request, $id)
    {
        $model = $this->getModel($id);

        $this->preDeleteActions($model, $request);
        $model->delete();
        $this->postDeleteActions($model, $request);

        Session::flash('alert', $this->human_singular . ' gelöscht.');

        return redirect()->route($this->model_plural . '.index');
    }

    protected function preDeleteActions(Model $model, Request $request)
    {

    }

    protected function postDeleteActions(Model $model, Request $request)
    {

    }

    protected function getModelName(Model $model)
    {
        return $model->name;
    }

    protected function getModels()
    {
        return $this->model->orderBy('name')->get();
    }

    protected function getModel($id)
    {
        return $this->model->findOrFail($id);
    }

    protected function getValidator(Request $request, bool $creating = false)
    {
        $v = Validator::make($request->all(), $this->rules, $this->rules_messages);

        return $v;
    }

    private function getViewData($data = [], Model $model = null)
    {
        return array_merge($data, [
            'model_singular' => $this->model_singular,
            'model_plural' => $this->model_plural,
            'human_singular' => $this->human_singular,
            'human_plural' => $this->human_plural,
            'name' => $model != null ? $this->getModelName($model) : ''
        ]);
    }
}
