<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 *
 * Controller responsible for web login/logout.
 * Authenticates against the App\User model.
 */
class LoginController extends Controller
{
    /**
     * Displays the login form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginform()
    {
        return view('pages.auth.login');
    }

    /**
     * Ends a user session.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    /**
     * Tries to authenticate a user with the given credentials. If successful,
     * starts a user session and redirects to the desired page.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checklogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->get('email'), 'password'=>$request->get('password')], $request->get('remember')))
        {
            Session::flash('alert', 'Login erfolgreich');
            return redirect()->intended('/home');
        }
        else
        {
            Session::flash('alert', 'E-Mail oder Kennwort falsch.');
            Session::flash('alert_class', 'alert-warning');
            return redirect()->back();
        }
    }
}
