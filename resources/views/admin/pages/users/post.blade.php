

    @extends('admin.master')
    @section('content')

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
                <th scope="col">Action</th>
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
            <td>
                <a class="btn btn-success" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach

    </table>

    @endsection



