<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class LoginController extends Controller
{
	 protected $redirectTo = '/admin_dashboard';
	 //protected $redirectAfterLogout = '/admin_login';

	 //Trait
    use AuthenticatesUsers;

    protected function guard()
    {
    	return Auth::guard('admin');
    }
    //
    public function showLoginForm()
    {
    	return view('admin.login');

    }

   
}
