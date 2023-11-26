<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Recepient extends Controller
{
    public function form(){

      
        return view('admin.pages.recepient.recepientform.form');
    }
}
