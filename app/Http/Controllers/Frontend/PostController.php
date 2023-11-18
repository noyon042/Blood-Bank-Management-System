<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function memberPost()
   {
    $members=MemberPost::all();
    return view('frontend.pages.post',compact('members'));
   }

   public function store(Request $request)
   {

    // dd($request->all());

    $fileName=null;
    if($request->hasFile('image'))
    {
        // dd('hi');
        $file=$request->file('image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

        $file->storeAs('/uploads',$fileName);

    }
    // dd('bye');

       MemberPost::create([

           'name'=>$request->name,
           'role'=>$request->role,
           'email'=>$request->email,
           'blood_group'=>$request->blood_group,
           'contact'=>$request->contact,
           'address'=>$request->address,
           'image'=>$fileName,
       ]);


       // notify()->success('Customer Registration successful.');
       return redirect()->route('home');
   }

   public function donate(){
    $donate=MemberPost::where('role','donation')->get();
    // dd($donate);
    return view('frontend.pages.card_section.donate',compact('donate'));
   }


   public function receive(){
    $receive=MemberPost::where('role','recepient')->get();
    // dd($donate);
    return view('frontend.pages.card_section.recieve',compact('receive'));
   }
}
