<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectPath()
    {
        $role_id = (auth()->user()->role_id);
        switch ($role_id) {
            case "1":
                return ('/users/administrador');
                break;
            case "2":
                return ('/users/tecnico');
                break;
            case "3":
                return ('/users/secretaria');
                break;
            case "4":
                return ('/users/cliente');
                break;
            
        }
    }
        
}
