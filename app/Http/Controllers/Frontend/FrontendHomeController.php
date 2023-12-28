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


        // $request->validate([
        //     'search' => 'nullable|string', // Add more validation rules as needed
        // ]);

        // $query = MemberPost::query();

        // // Check if a search term is provided
        // if ($request->filled('search')) {
        //     $searchTerm = $request->input('search');
        //     $query->where('blood_group', 'LIKE', '%' . $searchTerm . '%')
        //         ->orWhere('city', 'LIKE', '%' . $searchTerm . '%');
        // }

        // // Get the search results
        // $members = $query->get();


        if($request->search)
        {
            $members=MemberPost::where('blood_group','LIKE','%'.$request->search.'%')->get();

        }else{
            $members=MemberPost::all();
        }
        $approvedMembersCount = $members->where('status', 'Approved')->count();



        $donations = MemberPost::all();

        $correctdate = Carbon::now();

        $differences = [];

        foreach ($donations as $donation)
         {
            $donationdate = Carbon::parse($donation->date);
            $difference = $correctdate->diffInDays($donationdate);
            $differences[$donation->id] = $difference;

         }

        return view("frontend.pages.search",compact('members','differences','approvedMembersCount'));
    }


    public function about()
    {
        return view('frontend.pages.aboutUs');
    }
}
