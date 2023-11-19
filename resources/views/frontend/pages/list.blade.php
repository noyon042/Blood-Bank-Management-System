

@extends('frontend.master')
@section('content')
<h1 >All Donor List</h1>
{{-- <a href="{{route('member.post.store')}}" method="post" class="btn btn-success">Create Post List Of Frontend</a> --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Name </th>
            <th scope="col">Role </th>
            <th scope="col">Email</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Last Donation Date</th>
            <th scope="col">Upload Image</th>
            <th scope="col">Action</th>
        </tr>

    </thead>

    @foreach ($donorList as $key=> $list)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->role}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->blood_group}}</td>
        <td>{{$list->contact}}</td>
        <td>{{$list->address}}</td>
        <td>{{$list->date}}</td>

        <td><img src="{{url('/uploads/'.$list->image)}}" alt="" /></td>
        <td>

            <a class="btn btn-danger" href="" >View</a>
            <a class="btn btn-success" href="">Edit</a>
            {{-- <a class="btn btn-danger" href="">Delete</a> --}}
        </td>
    </tr>
    @endforeach

</table>

@endsection



