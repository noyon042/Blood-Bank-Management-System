<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function applyNow($donorId)
    {


        $check = Apply::where('user_id', auth()->user()->id)->where('member_post_id', $donorId)->first();
        if ($check) {
            notify()->error('Already Applied');
            return redirect()->back();
        } else {
            Apply::create([
                'user_id' => auth()->user()->id,
                'member_post_id' => $donorId,
            ]);

            notify()->success('Applied Donor');
            return redirect()->back();
        }
    }


    public function cancelApply($apply_id)
    {

        $apply = Apply::find($apply_id);
        if ($apply) {
            $apply->update([
                'status' => 'cancelled'
            ]);
        }

        notify()->success('Apply Cancelled');
        return redirect()->back();
    }

    public function report($id)
    {
        // dd($id);
        $report = Apply::find($id);
        $memberPosts = Apply::with('memberPost')->get();
        // dd($report);
        return view('frontend.pages.applyReport', compact('report','memberPosts'));
    }

    public function viewReport(){
        $report = Apply::all();
        // $report = Apply::find($id);
        $memberPosts = Apply::with('memberPost')->get();
        $users = Apply::with('user')->get();

        return view('admin.pages.Reports.report',compact('report','memberPosts','users'));
    }

    public function printReport($id){
         $report = Apply::find($id);
         $memberPosts = Apply::with('memberPost')->get();
         $users = Apply::with('user')->get();
         return view('admin.pages.Reports.printreport',compact('report','memberPosts','users'));

    }


    public function activedonor(){
        //   $donorLists = DonorList::paginate(5);


        $activeDonors =Apply::where('status','accepted')->get();
        $uniqueDonorCount = $activeDonors->unique('member_post_id')->count();


            return view('frontend.pages.activeDonor', compact('activeDonors','uniqueDonorCount'));
        }
}
