<?php

namespace App\Http\Controllers;
use App\Models\DonorList;
use Illuminate\Http\Request;

class ListTable extends Controller
{
    public function listtable(){
      $donorLists = DonorList::all();
        return view('admin.pages.donorlist.ListTable.listtable', compact('donorLists'));
    }

    public function createForm(){
        return view('admin.pages.donorlist.ListTable.form');
    }

    public function store(Request $request){

      DonorList::create([
        'donor_name'=>$request->donor_name,
        'blood_group'=>$request->blood_group,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'last_donation_date'=>$request->last_donation_date
      ]);
      return redirect()->back();
    }
}
