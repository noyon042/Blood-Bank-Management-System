<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function memberPost()
   {
    return view('frontend.pages.post');
   }

   public function store(Request $request)
   {
       MemberPost::create([

           'name'=>$request->name,
           'role'=>$request->role,
           'email'=>$request->email,
           'blood_group'=>$request->blood_group,
           'contact'=>$request->contact,
           'address'=>$request->address
       ]);


       // notify()->success('Customer Registration successful.');
       return redirect()->back();
   }
}
