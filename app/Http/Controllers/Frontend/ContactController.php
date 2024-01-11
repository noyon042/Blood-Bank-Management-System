<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.Contact.form');
    }

    public function store(Request $request)
    {

        $validate=Validator::make($request->all(),[
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'phn_number' => 'required|regex:/^01[1-9][0-9]{8}$/|numeric',
            'email'=>'required|email',


         ]);

         if($validate->fails())
         {
            // notify()->success('Profile updated successfully.');

            notify()->error($validate->getMessageBag());
            return redirect()->back();
         }

        // dd($request->all());
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phn_number' => $request->phn_number,
            'text' => $request->text,
        ]);

        notify()->success('Message submitted successfully');

        return redirect()->back();
    }

    public function list()
    {
        $lists=Contact::all();
        return view('admin.pages.Contact.list',compact('lists'));
    }
}
