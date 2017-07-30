<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\CrudController;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends CrudController
{
    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email'
    ];

    protected $model_singular = 'user';
    protected $model_plural = 'users';
    protected $human_plural = 'Mitglieder';
    protected $human_singular = 'Mitglied';

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    protected function getValidator(Request $request, bool $creating = false)
    {
        $v = parent::getValidator($request, $creating);

        if(!$creating)
        {
            $v->sometimes('password', 'required|min:6', function($data) use ($request) {
                return $data->can_login && $request->get('password', '') != '';
            });
        }
        else
        {
            $v->sometimes('password', 'required|min:6|max:32', function($data) {
                return $data->can_login;
            });
        }

        return $v;
    }

    protected function getModelName(Model $model)
    {
        return $model->last_name . ', ' . $model->first_name;
    }

    protected function preUpdateActions(Model $model, array $data)
    {
        if($model->can_login && !$data['can_login'])
        {
            $data['password'] = null;
        }
        else if(!$model->can_login && !$data['can_login'])
        {
            $data['password'] = null;
        }
        else
        {
            if(!in_array('password', array_keys($data)))
            {
                $data['password'] = $model->password;
            }
            else
            {
                $data['password'] = Hash::make($data['password']);
            }
        }

        return $data;
    }

    protected function preStoreActions(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return $data;
    }
}
