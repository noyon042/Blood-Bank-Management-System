


@extends('admin.master')
@section('content')


<table class="table table-bordered">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Name </th>
            <th scope="col">Email </th>
            <th scope="col">Contact </th>
            <th scope="col">Message</th>

        </tr>

    </thead>

    @foreach ($lists as $key=> $listTable)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$listTable->name}}</td>
        <td>{{$listTable->email}}</td>
        <td>{{$listTable->phn_number}}</td>
        <td>{{$listTable->text}}</td>

    </tr>
    @endforeach

</table>

@endsection

