<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function registration()
    {
        // $register=User::all();
        return view('frontend.pages.registration');
    }

    public function store(Request $request)
    {
        // $validate=Validator::make($request->all(),[
        //     'name'=>'required',
        //     'role'=>'required',
        //     'blood_group'=>'required',
        //     'contact'=>'required',
        //     'user_email'=>'required|email',
        //     'user_password'=>'required|min:6',

        //  ]);

        //  if($validate->fails())
        //  {
        //      return redirect()->back()->with('myError',$validate->getMessageBag());
        //  }

         $fileName=null;
         if($request->hasFile('user_image'))
         {
             $file=$request->file('user_image');
             $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

             $file->storeAs('/uploads',$fileName);

         }

        User::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'member',
            'blood_group'=>$request->blood_group,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'date'=>$request->date,
            'image'=>$fileName

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

public function profile()
{

    return view('frontend.pages.profile');
}


public function edit($id)
{
//   dd($id);
  $editprofile=User::find($id);
//   dd($editprofile);
  return view('frontend.pages.profile.edit',compact('editprofile'));

}

public function update(Request $request,$id)
{
    $upadateProfile=user::find($id);

    if($upadateProfile)
    {

      $fileName=$upadateProfile->image;
      if($request->hasFile('image'))
      {
          $file=$request->file('image');
          $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

          $file->storeAs('/uploads',$fileName);

      }

      $upadateProfile->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'blood_group'=>$request->blood_group,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'date'=>$request->date,
        'image'=>$fileName
      ]);

      notify()->success('Product updated successfully.');
      return redirect()->back();
    }
}

}

