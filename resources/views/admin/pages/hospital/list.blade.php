@extends('admin.master')
@section('content')

<a href="{{route('hospital.form')}}" class="btn btn-success">Create Hospital Form</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Hospital Name </th>
            <th scope="col">Hospital Location </th>
            <th scope="col">Availabe Blood Group</th>
            <th scope="col">Action</th>

        </tr>

    </thead>

    @foreach ($hospitals as $key=> $hos)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$hos->hospital_name}}</td>
        <td>{{$hos->location}}</td>
        <td>{{$hos->available_blood}}</td>

        <td>
            <a class="btn btn-success" href="">Edit</a>
            <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
