<?php

namespace App\Http\Controllers;

use App\Models\RecepientList;
use Illuminate\Http\Request;

class DataTable extends Controller
{
    public function data()
    {
        $recepientLists = RecepientList::all();
        return view('admin.pages.recepient.rdatatable.data', compact('recepientLists'));
    }

    public function createForm()
    {
        return view('admin.pages.recepient.rdatatable.form');
    }

    public function store(Request $request)
    {
        RecepientList::create([
            'recepient_id' => $request->recepient_id,
            'name' => $request->name,
            'blood_group' => $request->blood_group,
            'phn_number' => $request->phn_number,
            'hospital_name' => $request->hospital_name,
            'date_of_need' => $request->date_of_need
        ]);
        return redirect()->back();
    }
}
