<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function store(Request $request)
    {
        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'member',
            'password'=>bcrypt($request->password),
        ]);


        notify()->success('Member Registration successful.');
        return redirect()->back();
    }

    public function login()
    {
        return view('frontend.pages.login');
    }


    public function doLogin(Request $request){

        $validate=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);

        if($validate->fails())
        {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials))
        {
            notify()->success('Login Success.');
            return redirect()->route('home');
        }

        notify()->error('Invalid Credentials.');
            return redirect()->back();


    }


    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');
        return redirect()->route('home');
    }
}

