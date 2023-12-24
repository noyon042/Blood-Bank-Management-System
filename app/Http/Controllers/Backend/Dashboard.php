<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard(){
        $countDonar=MemberPost::where('role','donation')->where('status','Approved')->get();
        $countRecepient=MemberPost::where('role','recepient')->where('status','Approved')->get();
        // $countBloodGroup = MemberPost::whereIn('blood_group', ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'])->get();
        $countBloodGroup=MemberPost::where('role','donation')->where('status','Approved')->get();
        $countReport=Apply::where('status','accepted')->get();


        return view('admin.pages.DashBoard.dashboard',compact('countDonar','countRecepient','countBloodGroup','countReport'));
    }
}
