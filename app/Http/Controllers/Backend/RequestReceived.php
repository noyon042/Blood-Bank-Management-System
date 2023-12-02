<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DonorList;
use App\Models\MemberPost;
use App\Models\ReceivedDonor;
use App\Models\RecepientList;
use App\Models\RequestRe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequestReceived extends Controller
{
    public function requestReceived()
    {
    //    $received=ReceivedDonor::all();
        $receiveds = ReceivedDonor::with(['donor', 'recepient'])->get();

// dd($received);

        return view('admin.pages.receivedRequest.list', compact('receiveds'));
    }
    public function form()
    {
        $donorlists = DonorList::all();
        $recepientlists = RecepientList::all();

        return view('admin.pages.receivedRequest.form', compact('donorlists', 'recepientlists'));
    }

    public function store(Request $request)
    {


        // dd($request->all());


        $val = Validator::make($request->all(), [

            'donor_id' => 'required',
            'recepient_id' => 'required',
            'response' => 'required',
            'hospital_name' => 'required',

        ]);

        if ($val->fails()) {

            return redirect()->back()->withErrors($val);
        }
        ReceivedDonor::create([
            'donor_id' => $request->donor_id,
            'recepient_id' => $request->recepient_id,
            'response' => $request->response,
            'hospital_name' => $request->hospital_name,
         ]);

            return redirect()->route('request.receivedform');
    }


    public function approval($id)
    {

        $approval=MemberPost::find($id);
        if($approval)
        {
            $approval->update([
                'status'=>'Approved'
            ]);
        }

        notify()->success('Approved by Admin');
       return redirect()->back();

    }
}
