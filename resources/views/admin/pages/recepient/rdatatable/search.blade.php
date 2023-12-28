@extends('admin.master')

@section('content')

<h2>Search result for : {{ request()->search }} found {{$recipients->count()}} recipients.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($recipients->count()>0)
<table class="table table-bordered">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Name </th>
            <th scope="col">email </th>
            <th scope="col">Blood type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Hospital Name/Address</th>
            <th scope="col">Date of Blood Needed</th>
            <th scope="col">Upload Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>



        </tr>

    </thead>

    @foreach ($recipients as $key=> $recepientList)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$recepientList->name}}</td>
        <td>{{$recepientList->email}}</td>
        <td>{{$recepientList->blood_group}}</td>
        <td>{{$recepientList->contact}}</td>
        <td>{{$recepientList->address}}</td>
        <td>{{$recepientList->date}}</td>
        <td><img class="img" src="{{url('/uploads/'.$recepientList->image)}}" style=" border-radius: 50%; height: 60px;width: 60px;" alt=""></td>
        <td>{{$recepientList->status}}</td>
{{--
<td>
@if($recepientList->status=='pending')
<a class="btn btn-danger" href="{{route('admin.approval',$recepientList->id)}}">Approve Recepient</a>
@endif
</td> --}}

        <td>
            <a class="btn bg-success text-white" href="{{route('recepient.edit',$recepientList->id)}}">Edit</a>
            @if($recepientList->status=='pending')
<a class="btn btn-danger" href="{{route('admin.approval',$recepientList->id)}}">Approve Recepient</a>
@endif
            <a class="btn btn-danger" href="{{route('recepient.delete',$recepientList->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

                @else

                    <h1>No recipient found.</h1>
                @endif


</div>
@endsection
