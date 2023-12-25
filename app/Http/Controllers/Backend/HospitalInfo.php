<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class HospitalInfo extends Controller
{
   public function hospital()
   {
    $hospitals=Hospital::all();
    $hospitalAddress=MemberPost::where('role','donation')->where('status','Approved')->get();

    return view('admin.pages.hospital.list',compact('hospitals','hospitalAddress'));
   }

   public function deleteDonor($id)
   {
     $donor=MemberPost::find($id);
     if($donor)
     {
       $donor->delete();
     }

     notify()->success('Donor Deleted Successfully.');
     return redirect()->back();
   }

   public function createForm()
   {
    return view('admin.pages.hospital.form');
   }

   public function store(Request $request)
   {
    Hospital::create([
       'hospital_name'=>$request->hospital_name,
       'location'=>$request->location,
       'available_blood'=>$request->available_blood,

    ]);

    return redirect()->route('hospital');
   }


   public function recepientHospital()
   {
    $hospitals=Hospital::all();
    $hospitalRecepient=MemberPost::where('role','recepient')->where('status','Approved')->get();

    return view('admin.pages.hospital.recepient',compact('hospitals','hospitalRecepient'));
   }

   public function deleteRecipient($id)
   {
     $recipient=MemberPost::find($id);
     if($recipient)
     {
       $recipient->delete();
     }

     notify()->success('Recipient Deleted Successfully.');
     return redirect()->back();
   }

   public function search(Request $request)
   {
       // dd(request()->all())

       if($request->search)
       {
           $hospitals=MemberPost::where('address','LIKE','%'.$request->search.'%')->get();
           //select * from products where name like % akash %;
       }else{
           $hospitals=MemberPost::all();
       }


       return view("admin.pages.hospital.donorSearch",compact('hospitals'));
   }

   public function searchRecipient(Request $request)
   {
       // dd(request()->all())

       if($request->search)
       {
           $recipients=MemberPost::where('address','LIKE','%'.$request->search.'%')->get();
           //select * from products where name like % akash %;
       }else{
           $recipients=MemberPost::all();
       }


       return view("admin.pages.hospital.recipientSearch",compact('recipients'));
   }
}
