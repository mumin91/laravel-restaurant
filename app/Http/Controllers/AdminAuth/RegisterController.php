<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;

//Auth Facade used in guard
use Auth;

//Validator facade used in validator method
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //

     protected $redirectPath = 'admin_dashboard';

    public function showRegistrationForm()
    {
    	return view('admin.register');
    }

    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $admin = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($admin);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);
    }


    protected function guard()
   {
       return Auth::guard('admin');
   }
}
