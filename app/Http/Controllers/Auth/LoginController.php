<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // ログアウト先を挿入している
    public function logout(Request $request)
    {
        // Auth::logout();は不要？

        $this->guard()->logout();

        $request->session()->invalidate();

        // /homeに変更
        return $this->loggedOut($request) ?: redirect('admin/cord');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // ログインした後のURL指定
    public function redirectPath()
    {
        return 'admin/home';
        //例）return 'costs/index';
    }
}
