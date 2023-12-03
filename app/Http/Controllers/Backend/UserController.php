<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use App\Models\User;
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
          return redirect()->back()->with('error','invalid user email or password');

    }



    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }


    public function List()
    {
        $users=User::all();
        return view('admin.pages.users.list',compact('users'));
    }
    public function createForm()
    {
        return view('admin.pages.users.create');
    }
    public function store(Request $request)
    {

        $validate=Validator::make($request->all(),[
           'user_name'=>'required',
           'role'=>'required',
           'user_email'=>'required|email',
           'user_password'=>'required|min:6',

        ]);

        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }

        $fileName=null;
        if($request->hasFile('user_image'))
        {
            $file=$request->file('user_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }
        User::create([
              'name'=>$request->user_name,
              'role'=>$request->role,
              'blood_group'=>$request->blood_group,
              'contact'=>$request->contact,
              'address'=>$request->address,
              'date'=>$request->date,
              'image'=>$fileName,
              'email'=>$request->user_email,
              'password'=>bcrypt($request->user_password),
        ]);

        return redirect()->back()->with('message','User created successfully.');
    }

    public function postList()
    {
        // $doner = MemberPost::where('role', '=' 'recepient')->get();

        $memberPosts=MemberPost::all();
        return view('admin.pages.users.post',compact('memberPosts'));
    }
}
