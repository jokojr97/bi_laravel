<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo(){
        if (Auth::user()->hasRole('admin')) {
            $this->redirectTo = route('admin.dashboard.index');
            return $this->redirectTo;
        } else if (Auth::user()->hasRole('kader')) {
            $this->redirectTo = route('kader.dashboard.index');
            return $this->redirectTo;
        } else {
            $this->redirectTo = route('user.dashboard.index');
            return $this->redirectTo;
        }

    }
}