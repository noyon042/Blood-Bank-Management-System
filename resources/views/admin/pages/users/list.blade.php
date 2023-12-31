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
<h1>Users List</h1>
<a href="{{route('users.create')}}" class="btn btn-success">Create Users List</a>
<table class="table table-bordered w-100 mx-auto">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Blood Group</th>
      <th scope="col">contact</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

        </tr>

    </thead>
    <tbody>

    @foreach ($users as $key=>$singleUser)

        <tr>

            <td>{{$key+1}}</td>
            <td>{{$singleUser->name}}</td>
            <td>
                @if ($singleUser->image)
                <img class="img" src="{{url('/uploads/'.$singleUser->image)}}" alt="">
                {{-- <img class="img" src="{{url('/uploads/'.$singleUser->image)}}" alt=""> --}}
                @else
                <img class="img" src="{{url('/uploads/default.jpg')}}" alt="">


                @endif
            </td>
            <td>{{$singleUser->email}}</td>
            <td>{{$singleUser->role}}</td>
            <td>{{$singleUser->blood_group}}</td>
            <td>{{$singleUser->contact}}</td>
            <td>{{$singleUser->address}}</td>
            {{-- <td>{{$singleUser->date}}</td> --}}
            <td>
                {{-- <a class="btn btn-success" href="">View</a> --}}
                <a class="btn bg-success text-white" href="{{route('users.edit',$singleUser->id)}}">Edit</a>
                <a  class="btn btn-danger"href="{{route('users.delete',$singleUser->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection

</body>
</html>
