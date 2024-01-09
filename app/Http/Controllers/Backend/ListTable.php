<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Apply;
use App\Models\DonorList;
use App\Models\MemberPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


    $val = Validator::make($request->all(), [

        'name' => 'required',
        'role' => 'required',
        'email' => 'required',
        'blood_group' => 'required',
        'contact' => 'required',
        'date' => 'required',


    ]);

    if ($val->fails()) {

        notify()->error($val->getMessageBag());
        return redirect()->back();    }

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
        'user_id'=> auth()->user()->id,
        'role'=>$request->role,
        'email'=>$request->email,
        'blood_group'=>$request->blood_group,
        'contact'=>$request->contact,
        'address'=>$request->address,
        'date'=>$request->date,
     //    'status'=>'pending',
        'image'=>$fileName,
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
            // 'status'=>$request->status,

            'image'=>$fileName
          ]);

          notify()->success('Updated successfully.');
          return redirect()->back();
        }
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

    public function search(Request $request)
    {
        // dd(request()->all())

        if($request->search)
        {
            $donors=MemberPost::where('role','donation')->where('name','LIKE','%'.$request->search.'%')->get();
            //select * from products where name like % akash %;
        }else{
            $donors=MemberPost::all();
        }


        return view("admin.pages.donorlist.search",compact('donors'));
    }


    public function activeDonor(){
        //   $donorLists = DonorList::paginate(5);


        $activeDonors =Apply::where('status','accepted')->get();

            return view('admin.pages.donorResponse.active', compact('activeDonors'));
        }

}
