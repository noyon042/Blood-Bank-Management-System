<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;

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
           'date'=>$request->date,
           'image'=>$fileName,
       ]);


       notify()->success('Member Post successful.');
       return redirect()->route('home');
   }

   public function donate(){
    $donate=MemberPost::where('role','donation')->get();
    // dd($donate);
    return view('frontend.pages.card_section.donate',compact('donate'));
   }


   public function receive(){
    $receive=MemberPost::where('role','recepient')->get();
    // dd($receive);
    return view('frontend.pages.card_section.recieve',compact('receive'));
   }

   public function view($id){

    $singleMember=MemberPost::find($id);
    // dd($singleProduct->name);
    return view('frontend.pages.singleview',compact('singleMember'));
   }

   public function list()
   {
    $donorList=MemberPost::where('role','donation')->get();
    // dd($receive);
    return view('frontend.pages.list',compact('donorList'));
   }

   public function viewprofile($id)
   {
    $profile=MemberPost::find($id);

    // if($profile)
    // {
    //     $profile->view();
    // }
    notify()->success('Profile Viewed Succesfully');
    // return redirect()->back();
    return view('frontend.pages.viewProfile',compact('profile'));

   }


//    public function myPost($id)
//    {
//     $myPost=MemberPost::find($id);
//     return view('frontend.pages.myPost.mypost',compact('myPost'));
//    }

}
