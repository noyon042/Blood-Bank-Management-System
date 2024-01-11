@extends('admin.master')
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Donor ID</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Contact</th>
            <th scope="col">Hospital Name/Address</th>
            <th scope="col">Last Donation Date</th>
            <th scope="col">Image</th>

            <th scope="col">Action</th>
        </tr>

    </thead>
    <tbody>

        @foreach ( $inactiveDonors as $key=>$request)


        <tr>
            <th scope="row">{{ $key+1 }}</th>
<td>{{$request->memberPost->name}}</td>
<td>{{$request->memberPost->email}}</td>
<td>{{$request->memberPost->blood_group}}</td>
<td>{{$request->memberPost->contact}}</td>
<td>{{$request->memberPost->address}}</td>
<td>{{$request->memberPost->date}}</td>
<td>

    <img class="img" src="{{url('/uploads/'.$request->memberPost->image)}}" style=" border-radius: 50%;height: 60px;width: 60px;" alt=""></td>
    {{-- <img class="img" src="{{url('/uploads/'.$donorList->image)}}" alt=""></td> --}}
   </td>
<td>
     <a class="btn btn-danger" href="{{ route('donor.delete', $request->memberPost->id) }}">Delete</a>
</td>
        </tr>

        @endforeach
    </tbody>
</table>
{{-- {{$requests->links()}} --}}

@endsection
