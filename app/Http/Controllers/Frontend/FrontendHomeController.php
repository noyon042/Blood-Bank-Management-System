<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home()
    {
        $members=MemberPost::all();

        return view('frontend.pages.home',compact('members'));
    }
}
