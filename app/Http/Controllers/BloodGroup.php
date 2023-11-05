<?php

namespace App\Http\Controllers;

use App\Models\BloodType;
use App\Models\DonorList;
use App\Models\RecepientList;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        // $bloodgroups=BloodType::with(['recepientlist','donorlist']);
        return view('admin.pages.bloodgroup.manageBlood.list',compact('bloodgroups'));
    }

    public function createForm(){

        $donorlists=DonorList::all();
        $recepientlists=RecepientList::all();
        return view('admin.pages.bloodgroup.manageBlood.form',compact('donorlists','recepientlists'));
    }


    public function store(Request $request)

    {

        $validate=Validator::make($request->all(),[

            'donor_name'=>'required',
            'contact'=>'required',
            'name'=>'required',
            'hospital_name'=>'required',
            'date'=>'required',
            'blood_id'=>'required',
            'location'=>'required',
            // 'expiry_date'=>'required'

        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate);
        }

        // dd($request->all());

       BloodType::create([
        'donor_name'=>$request->donor_name,
        'contact'=>$request->contact,
        'name'=>$request->name,
        'hospital_name'=>$request->hospital_name,
        'date_of_need'=>$request->date,
          'blood_id'=>$request->blood_id,
          'location'=>$request->location,
        //   'date'=>$request->expiry_date,
          'reason'=>$request->reason,

        ]);
        return redirect()->route('bloodgroup.manageblood');
      }
}
