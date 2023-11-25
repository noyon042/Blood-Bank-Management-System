<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DonorList;
use App\Models\MemberPost;
use Illuminate\Http\Request;

class ListTable extends Controller
{
    public function listtable(){
    //   $donorLists = DonorList::paginate(5);
    $donorLists =MemberPost::where('role','donation')->get();
        return view('admin.pages.donorlist.ListTable.listtable', compact('donorLists'));
    }

    public function createForm(){
        return view('admin.pages.donorlist.ListTable.form');
    }

    public function store(Request $request){

        $fileName=null;
        if($request->hasFile('image'))
        {
            // dd('hi');
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }

      MemberPost::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'blood_group'=>$request->blood_group,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'date'=>$request->date,
        'image'=>$fileName
      ]);
      return redirect()->route('donorlist.listtable');
    }


    public function delete($id)
    {
      $donor=MemberPost::find($id);
      if($donor)
      {
        $donor->delete();
      }

      notify()->success('Donor Deleted Successfully.');
      return redirect()->back();
    }


    public function edit($id)
    {
      $donor=MemberPost::find($id);

      return view('admin.pages.donorlist.ListTable.edit',compact('donor'));

    }

    public function update(Request $request,$id)
    {
        $donor=MemberPost::find($id);

        if($donor)
        {

          $fileName=$donor->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

          }

          $donor->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'blood_group'=>$request->blood_group,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'date'=>$request->date,
            'image'=>$fileName
          ]);

          notify()->success('Donor updated successfully.');
          return redirect()->back();
        }
    }
}
