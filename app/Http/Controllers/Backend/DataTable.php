<?php
namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RecepientList;
use Illuminate\Support\Facades\Validator;

class DataTable extends Controller
{
    public function data()
    {
        // $recepientLists = RecepientList::all();

        $recepientLists =MemberPost::where('role','recepient')->get();
        return view('admin.pages.recepient.rdatatable.data', compact('recepientLists'));
    }

    public function createForm()
    {
        return view('admin.pages.recepient.rdatatable.form');
    }

    public function store(Request $request)
    {


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

        // dd($request->all());
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
        return redirect()->route('recepient.recepientdatatable');
    }





    public function delete($id)
    {
      $recepient=MemberPost::find($id);
      if($recepient)
      {
        $recepient->delete();
      }

      notify()->success('Recepient Deleted Successfully.');
      return redirect()->back();
    }


    public function edit($id)
    {
      $recepient=MemberPost::find($id);

      return view('admin.pages.recepient.rdatatable.edit',compact('recepient'));

    }

    public function update(Request $request,$id)
    {
        $recepient=MemberPost::find($id);

        if($recepient)
        {

          $fileName=$recepient->image;
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

              $file->storeAs('/uploads',$fileName);

          }

          $recepient->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'blood_group'=>$request->blood_group,
            'contact'=>$request->contact,
            'address'=>$request->address,
            'date'=>$request->date,
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
            $recipients=MemberPost::where('role','recepient')->where('name','LIKE','%'.$request->search.'%')->get();
            //select * from products where name like % akash %;
        }else{
            $recipients=MemberPost::all();
        }


        return view("admin.pages.recepient.rdatatable.search",compact('recipients'));
    }
}
