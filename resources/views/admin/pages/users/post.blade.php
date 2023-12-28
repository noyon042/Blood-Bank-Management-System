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

    {{-- <a href="{{route('member.post.store')}}" method="post" class="btn btn-success">Create Post List Of Frontend</a> --}}
    <table class="table table-striped">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col">Name </th>
                <th scope="col">Role </th>
                <th scope="col">Email</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Contact</th>
                <th scope="col">Hospital Name/Address</th>
                <th scope="col">Date</th>
                <th scope="col">Upload Image</th>
                {{-- <th scope="col">Action</th> --}}
            </tr>

        </thead>

        @foreach ($memberPosts as $key=> $post)

        <tr>

            <th scope="row">{{ $key+1}}</th>
            <td>{{$post->name}}</td>
            <td>{{$post->role}}</td>
            <td>{{$post->email}}</td>
            <td>{{$post->blood_group}}</td>
            <td>{{$post->contact}}</td>
            <td>{{$post->address}}</td>
            <td>{{$post->date}}</td>

            <td><img class="img" src="{{url('/uploads/'.$post->image)}}" alt="" /></td>
            {{-- <td>
                <a class="btn btn-success" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td> --}}
        </tr>
        @endforeach

    </table>

    @endsection

</body>
</html>

