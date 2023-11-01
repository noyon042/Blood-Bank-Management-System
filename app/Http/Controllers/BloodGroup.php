<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use Illuminate\Http\Request;

class BloodGroup extends Controller
{
    // public function blood(){
    //     return view('admin.pages.bloodgroup');
    // }

    public function addblood(){
        return view('admin.pages.bloodgroup.addblood');
    }

    public function manageBlood(){
        $bloodgroups = BloodType::all();
        return view('admin.pages.bloodgroup.manageBlood.list',compact('bloodgroups'));
    }
    public function createForm(){
        return view('admin.pages.bloodgroup.manageBlood.form');
    }
    public function store(Request $request){

       BloodType::create([
          'blood_id'=>$request->blood_id,
          'location'=>$request->location,
          'date'=>$request->expiry_date,
          'reason'=>$request->reason,

        ]);
        return redirect()->route('manageblood.create');
      }
}
