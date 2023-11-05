<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginForm(){
        return view('admin.pages.login');
    }


    public function loginPost(Request $request)
    {
         $validate=Validator::make($request->all(),
          [
            'email'=>'required|email',
            'password'=>'required|min:5',

          ]);

          if($validate->fails())
          {
            return redirect()->back()->withErrors($validate);
          }

          $credential=$request->except('_token');

          $login=auth()->attempt($credential);
          if($login)
          {
            return redirect()->route('dashboard');
          }
          return redirect()->back()->withErrors('invalid user email or password');

    }

    

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }
}