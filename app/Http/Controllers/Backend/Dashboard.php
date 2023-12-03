<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard(){
        $countDonar=MemberPost::where('role','donation')->get();
        $countRecepient=MemberPost::where('role','recepient')->get();
        // $countBloodGroup=MemberPost::where('blood_group')->get();

        return view('admin.pages.DashBoard.dashboard',compact('countDonar','countRecepient'));
    }
}
