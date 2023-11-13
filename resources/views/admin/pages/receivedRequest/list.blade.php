@extends('admin.master')
@section('content')
<h1>Recepient's request to Donor</h1>
<a href="{{route('request.form')}}" class="btn btn-success">Donor Received Request</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>SL NO</th>
            <th scope="col">Requester Name</th>
            {{-- <th scope="col">Request Date</th> --}}
            <th scope="col">Donar Name</th>
            <th scope="col">Admin Response</th>
            <th scope="col">Hospital</th>
            <th>Actions</th>
        </tr>

    </thead>
    <tbody>

        @foreach ( $receiveds as $key=>$request)


        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$request->recepient->name}}</td>
            <td>{{$request->donor->donor_name}}</td>
            {{-- <td>{{$request->recepientlist->date_of_need}}</td> --}}
            <td>{{$request->response}}</td>
            <td>{{$request->recepient->hospital_name}}</td>
            <td>
                <a class="btn btn-success" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- {{$requests->links()}} --}}

@endsection
