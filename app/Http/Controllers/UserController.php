<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name' => 'required|min:2',
        'email' => 'required|email'
    ];

    protected function getValidator(Request $request, bool $creating)
    {
        $v = Validator::make($request->all(),
            $this->rules);

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

    public function index()
    {
        return view('pages.users.index', ['users' => User::all()]);
    }

    public function edit(Request $request, User $user)
    {
        return view('pages.users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $this->getValidator($request, false)->validate();

        $data = $request->all();
        if($user->can_login && !$data['can_login'])
        {
            $data['password'] = null;
        }
        else if(!$user->can_login && !$data['can_login'])
        {
            $data['password'] = null;
        }
        else
        {
            if($request->get('password', '') == '')
            {
                $data['password'] = $user->password;
            }
            else
            {
                $data['password'] = Hash::make($data['password']);
            }
        }

        $user->update($data);
        $user->save();

        Session::flash('alert', 'Benutzer aktualisiert');

        return redirect()->route('users.index');
    }

    public function create(Request $request)
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $this->getValidator($request, true)->validate();

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        $user = new User($data);
        $user->save();

        Session::flash('alert', 'Mitglied angelegt');

        return redirect()->route('users.index');
    }
}
