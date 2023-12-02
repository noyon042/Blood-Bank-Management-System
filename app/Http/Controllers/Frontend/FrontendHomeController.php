<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home()
    {
        $memberPost=MemberPost::all();

        return view('frontend.pages.home',compact('memberPost'));
    }

    public function search(Request $request)
    {
        // dd(request()->all())

        if($request->search)
        {
            $members=MemberPost::where('blood_group','LIKE','%'.$request->search.'%')->get();

        }else{
            $members=MemberPost::all();
        }



        $donations = MemberPost::all();

        $correctdate = Carbon::now();

        $differences = [];

        foreach ($donations as $donation)
         {
            $donationdate = Carbon::parse($donation->date);
            $difference = $correctdate->diffInDays($donationdate);
            $differences[$donation->id] = $difference;

         }

        return view("frontend.pages.search",compact('members','differences'));
    }
}
