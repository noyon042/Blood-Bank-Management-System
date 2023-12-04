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


        $check=Apply::where('user_id',auth()->user()->id)->where('member_post_id',$donorId)->first();
        if($check)
        {
            notify()->error('Already Applied');
            return redirect()->back();
        }else{
            Apply::create([
                'user_id'=>auth()->user()->id,
                'member_post_id'=>$donorId,
           ]);

           notify()->success('Applied Donor');
           return redirect()->back();
        }

    }


    public function cancelApply($apply_id)
    {

        $apply=Apply::find($apply_id);
        if($apply)
        {
            $apply->update([
                'status'=>'cancelled'
            ]);
        }

        notify()->success('Apply Cancelled');
       return redirect()->back();

    }


    // public function acceptRequest($recepient_id)
    // {

    //     $requestAccept=Apply::find($recepient_id);
    //     if($requestAccept)
    //     {
    //         $requestAccept->update([
    //             'status'=>'accepted'
    //         ]);
    //     }

    //     notify()->success('Request Accepted');
    //    return redirect()->back();

    // }
}
