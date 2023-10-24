@extends('admin.master')
@section('content')

<a href="{{route('recepient.create')}}" class="btn btn-success">Create New Recepient</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Name </th>
            <th scope="col">Blood type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Hospital Name</th>
            <th scope="col">Date of Blood Needed</th>
        </tr>

    </thead>

    @foreach ($recepientLists as $recepientList)

    <tr>

        <th scope="row">{{ $recepientList->recepient_id }}</th>
        <td>{{$recepientList->name}}</td>
        <td>{{$recepientList->blood_group}}</td>
        <td>{{$recepientList->phn_number}}</td>
        <td>{{$recepientList->hospital_name}}</td>
        <td>{{$recepientList->date_of_need}}</td>
        <td>
            <a class="btn btn-success" href="">Edit</a>
            <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection