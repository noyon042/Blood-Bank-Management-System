<?php
namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RecepientList;

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
        // dd($request->all());
        RecepientList::create([
            'name' => $request->name,
            'email' => $request->email,
            'blood_group' => $request->blood_group,
            'phn_number' => $request->phn_number,
            'hospital_name' => $request->hospital_name,
            'date_of_need' => $request->date_of_need
        ]);
        return redirect()->route('recepient.recepientdatatable');
    }
}
