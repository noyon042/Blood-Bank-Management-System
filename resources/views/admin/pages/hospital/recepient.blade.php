@extends('admin.master')
@section('content')

<a href="{{route('hospital.form')}}" class="btn btn-success">Create Hospital Form</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Recepient Name </th>
            <th scope="col">Hospital Name/Address</th>
            <th scope="col">Availabe Blood Group</th>
            <th scope="col">Action</th>

        </tr>

    </thead>

    @foreach ($hospitalRecepient as $key=> $hos)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$hos->name}}</td>
        <td>{{$hos->address}}</td>
        <td>{{$hos->blood_group}}</td>

        <td>
            {{-- <a class="btn btn-success" href="">Edit</a> --}}
            <a class="btn btn-danger" href="">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
