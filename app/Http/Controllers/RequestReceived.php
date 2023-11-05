<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestReceived extends Controller
{
    public function requestReceived(){
        return view('admin.pages.receivedRequest.list');
    }
}
