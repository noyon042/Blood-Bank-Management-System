<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.Contact.form');
    }

    public function store(Request $request)
    {


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
