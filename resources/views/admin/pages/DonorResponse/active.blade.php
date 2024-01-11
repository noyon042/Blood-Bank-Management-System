@extends('admin.master')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th  class="text-center " scope="col">Donor ID</th>
            <th  class="text-center" scope="col">Donor Name</th>
            <th  class="text-center" scope="col">Donation Count</th>
            <th  class="text-center" scope="col">Email</th>
            <th  class="text-center" scope="col">Blood Type</th>
            <th  class="text-center" scope="col">Contact</th>
            <th  class="text-center" scope="col">Hospital Name/Address</th>
            <th  class="text-center" scope="col">Last Donation Date</th>
            <th  class="text-center" scope="col">Image</th>

        </tr>

    </thead>
    <tbody>
        @php
        $id=1;
        @endphp

        @foreach ($activeDonors->unique('memberPost.email') as $key => $request)
        @php
        $counter=0;
        $currentEmail=$request->memberPost->email;
            for($i=0; $i<count($activeDonors); $i++){
                if($currentEmail==$activeDonors[$i]->memberPost->email){
                    $counter=$counter+1;
                }
            }
        @endphp


        <tr>
            <th scope="row"  class="text-center" style="margin-top:10px;">{{ $id++ }}</th>
<td  class="text-center">{{$request->memberPost->name }}</td>
<td class="text-center">{{$counter}}</td>
<td  class="text-center">{{$request->memberPost->email}}</td>
<td  class="text-center">{{$request->memberPost->blood_group}}</td>
<td  class="text-center">{{$request->memberPost->contact}}</td>
<td  class="text-center">{{$request->memberPost->address}}</td>
<td  class="text-center">{{$request->memberPost->date}}</td>
<td>

    <img class="img" src="{{url('/uploads/'.$request->memberPost->image)}}" style=" border-radius: 50%;height: 60px;width: 60px;" alt=""></td>
    {{-- <img class="img" src="{{url('/uploads/'.$donorList->image)}}" alt=""></td> --}}
   </td>

        </tr>

        @endforeach
    </tbody>
</table>
{{-- {{$requests->links()}} --}}

@endsection
