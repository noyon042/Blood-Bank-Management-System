<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodGroup extends Controller
{
    public function blood(){
        return view('admin.pages.bloodgroup.Blood.blood');
    }
}
