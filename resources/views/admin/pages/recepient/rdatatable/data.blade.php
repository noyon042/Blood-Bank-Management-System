
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

@extends('admin.master')
@section('content')

<a href="{{route('recepient.create')}}" class="btn btn-success">Create New Recepient</a>
<table class="table table-bordered">
    <thead>
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

    @foreach ($recepientLists as $key=> $recepientList)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$recepientList->name}}</td>
        <td>{{$recepientList->email}}</td>
        <td>{{$recepientList->blood_group}}</td>
        <td>{{$recepientList->contact}}</td>
        <td>{{$recepientList->address}}</td>
        <td>{{$recepientList->date}}</td>
        <td><img class="img" src="{{url('/uploads/'.$recepientList->image)}}" alt=""></td>
        <td>{{$recepientList->status}}</td>
{{--
<td>
@if($recepientList->status=='pending')
<a class="btn btn-danger" href="{{route('admin.approval',$recepientList->id)}}">Approve Recepient</a>
@endif
</td> --}}

        <td>
            <a class="btn btn-success" href="{{route('recepient.edit',$recepientList->id)}}">Edit</a>
            @if($recepientList->status=='pending')
<a class="btn btn-danger" href="{{route('admin.approval',$recepientList->id)}}">Approve Recepient</a>
@endif
            <a class="btn btn-danger" href="{{route('recepient.delete',$recepientList->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
</body>
</html>
