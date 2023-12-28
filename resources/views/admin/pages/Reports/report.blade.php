@extends('admin.master')

@section('content')

<div style="width:100%;">
    <div style=" margin:auto;width:90%">
     <h1 style="text-align: left"> All Apply For Donar:</h1>
<table class="table border " style="width: 100%;"  >
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Recipient Name</th>
            <th scope="col">Donor Name</th>
            {{-- <th scope="col">Request Status</th> --}}
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($report as $apply)
            <tr>
                <th scope="row">{{ $apply->id }}</th>
                <td>{{ $apply->created_at }}</td>
                <td>{{ $apply->user->name}}</td>
                <td>{{ $apply->memberPost->name}}</td>
                {{-- <td>{{ $apply->status }}</td> --}}
                <td>{{ $apply->status }}</td>
                <td>

                    <a class="btn btn-info" href="{{ route('print.report', $apply->id) }}">Report</a>
                </td>
            </tr>
        @endforeach

</table>

@endsection
