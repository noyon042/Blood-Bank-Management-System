<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\MemberPost;
use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;
use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
   public function memberPost()
   {

    $members=MemberPost::all();

    $user=User::all();
    return view('frontend.pages.post',compact('members','user'));
   }

   public function store(Request $request)
   {


    $val = Validator::make($request->all(), [

        'name' => 'required|regex:/^[a-zA-Z\s]+$/',
        'role'=>'required',
        'blood_group'=>'required',
        'contact' => 'required|regex:/^01[1-9][0-9]{8}$/|numeric',
        'email'=>'required|email',
        'date' => 'required',


    ]);

    if ($val->fails()) {

        notify()->error($val->getMessageBag());
        return redirect()->back();    }

    // dd($request->all());

    $fileName=null;
    if($request->hasFile('image'))
    {
        // dd('hi');
        $file=$request->file('image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

        $file->storeAs('/uploads',$fileName);

    }

       MemberPost::create([

           'name'=>$request->name,
           'user_id'=> auth()->user()->id,
           'role'=>$request->role,
           'email'=>$request->email,
           'blood_group'=>$request->blood_group,
           'contact'=>$request->contact,
           'address'=>$request->address,
           'date'=>$request->date,
        //    'status'=>'pending',
           'image'=>$fileName,
       ]);


       notify()->success('Member Post successfully.');
       return redirect()->route('home');
   }

   public function donate()
   {




    $donate=MemberPost::where('role','donation')->get();


            $donations = MemberPost::all();

            $currentdate = Carbon::now();

            $differences = [];

            foreach ($donations as $donation)
             {
                $donationdate = Carbon::parse($donation->date);
                $difference = $currentdate->diffInDays($donationdate);
                $differences[$donation->id] = $difference;
            }
           // dd($differences);

return view('frontend.pages.card_section.donate', compact('donate', 'differences'));

   }


   public function receive(){
    $receive=MemberPost::where('role','recepient')->get();
    // dd($receive);

    return view('frontend.pages.card_section.recieve',compact('receive'));
   }

   public function view($id){

    $singleMember=MemberPost::find($id);
    // dd($singleProduct->name);
    return view('frontend.pages.singleView.donarView',compact('singleMember'));
   }


   public function recView($id){

    $singleRecepient=MemberPost::find($id);
    // dd($singleProduct->name);
    return view('frontend.pages.singleView.recepientView',compact('singleRecepient'));
   }

   public function list()
   {


    $donorList=MemberPost::with('user')->get();
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
    notify()->success('Post Viewed Succesfully');
    // return redirect()->back();
    return view('frontend.pages.viewProfile',compact('profile'));

   }


   public function myPost()
   {
    // dd($user_id);
    // $myPost=MemberPost::find($user_id);

//    dd($myPost->toarray());

    $myPost=MemberPost::where('user_id', auth()->user()->id)->get();
    // dd($myPost->toarray());

    return view('frontend.pages.myPost.mypost',compact('myPost'));
   }





   public function edit($id)
{
//   dd($id);
  $editPost=MemberPost::find($id);
//   dd($editPost);
  return view('frontend.pages.myPost.edit',compact('editPost'));

}

public function update(Request $request,$id)
{

    $validate=Validator::make($request->all(),[
        'name' => 'required|regex:/^[a-zA-Z\s]+$/',
        'contact' => 'required|regex:/^01[1-9][0-9]{8}$/|numeric',
        'email'=>'required|email',

     ]);

     if($validate->fails())
     {
        // notify()->success('Profile updated successfully.');

        notify()->error($validate->getMessageBag());
        return redirect()->back();
     }

    $editPost=MemberPost::find($id);

    if($editPost)
    {

      $fileName=$editPost->image;
      if($request->hasFile('image'))
      {
          $file=$request->file('image');
          $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

          $file->storeAs('/uploads',$fileName);

      }

      $editPost->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'blood_group'=>$request->blood_group,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'date'=>$request->date,
        'image'=>$fileName
      ]);

      notify()->success('Post updated successfully.');
      return redirect()->route('myPost');
    }
}


public function viewRequest($id)
{
    // $recepientRequest = Apply::with('user')->get();
    // $requestAccept=Apply::where('user_id',$id)->get();

    $requestAccept = Apply::with('user')
    ->where('member_post_id',$id)
    ->get();

return view('frontend.pages.myPost.viewRequest',compact('requestAccept'));
}


   public function acceptRequest($recepient_id)
    {

        $requestAccept=Apply::find($recepient_id);
        if($requestAccept)
        {
            $requestAccept->update([
                'status'=>'accepted'
            ]);
        }

        notify()->success('Request Accepted');
       return redirect()->back();

    }


    public function rejectRequest($recepient_id)
    {

        $requestReject=Apply::find($recepient_id);
        if($requestReject)
        {
            $requestReject->update([
                'status'=>'rejected'
            ]);
        }

        notify()->success('Request Rejected');
       return redirect()->back();

    }

}
