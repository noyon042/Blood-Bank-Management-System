<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalInfo extends Controller
{
   public function hospital()
   {
    $hospitals=Hospital::all();
    return view('admin.pages.hospital.list',compact('hospitals'));
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
}
