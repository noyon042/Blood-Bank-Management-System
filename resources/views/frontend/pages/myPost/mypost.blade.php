<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .img{
            border-radius: 50%;
            height: 60px;
            width: 60px;
        }
    </style>
</head>
<body>


@extends('frontend.master')
@section('content')
<h1>View My Posts</h1>
{{-- <a href="{{route('request.form')}}" class="btn btn-success">Donor Received Request</a> --}}
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th scope="col">Role</th>
            {{-- <th scope="col">Request Date</th> --}}
            <th>User Id</th>
            <th scope="col">Email Address</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Donation/Required Date</th>
            <th scope="col">Upload Image</th>
            <th>Actions</th>
        </tr>

    </thead>
    <tbody>

        @foreach ( $myPost as $key=>$request)


        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$request->name}}</td>
            <td>{{$request->role}}</td>
            <td>{{$request->user_id}}</td>
            <td>{{$request->email}}</td>
            <td>{{$request->blood_group}}</td>
            <td>{{$request->contact}}</td>
            <td>{{$request->address}}</td>
            <td>{{$request->date}}</td>
            <td>
                <img class="img" src="{{url('/uploads/'.$request->image)}}" alt="">
            </td>
            <td>
                <a class="btn btn-success" href="{{route('myPost.edit',$request->id)}}">Edit</a>
                {{-- <a class="btn btn-danger" href="">Delete</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- {{$requests->links()}} --}}

@endsection

</body>
</html>
