<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recepient extends Controller
{
    public function form(){
        return view('admin.pages.recepient.recepientform.form');
    }
}
