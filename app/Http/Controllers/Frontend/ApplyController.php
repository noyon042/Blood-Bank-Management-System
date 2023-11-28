<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function applyNow($donorId)
    {

       Apply::create([
            'user_id'=>auth()->user()->id,
            'member_post_id'=>$donorId,
       ]);

       notify()->success('Applied Donor');
       return redirect()->back();
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
}
