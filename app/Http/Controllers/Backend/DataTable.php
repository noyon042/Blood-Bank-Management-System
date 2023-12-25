<?php
namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\MemberPost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RecepientList;

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

        $fileName=null;
        if($request->hasFile('image'))
        {
            // dd('hi');
            $file=$request->file('image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }

        // dd($request->all());
        RecepientList::create([
            'name' => $request->name,
            'email' => $request->email,
            'blood_group' => $request->blood_group,
            'phn_number' => $request->phn_number,
            'hospital_name' => $request->hospital_name,
            'date_of_need' => $request->date_of_need,
            'image'=>$fileName
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

          notify()->success('Recepient updated successfully.');
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
            $recipients=MemberPost::where('name','LIKE','%'.$request->search.'%')->get();
            //select * from products where name like % akash %;
        }else{
            $recipients=MemberPost::all();
        }


        return view("admin.pages.recepient.rdatatable.search",compact('recipients'));
    }
}
