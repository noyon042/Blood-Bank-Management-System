@extends('admin.master')
@section('content')
<h1>Recepient's request to Donor</h1>
<a href="{{route('request.form')}}" class="btn btn-success">Create New List</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Donor ID</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Last Donation Date</th>

        </tr>

    </thead>
    <tbody>

    @foreach ($donorLists as $donorList)

        <tr>

<th scope="row">{{ $donorList->id }}</th>
<td>{{$donorList->donor_name}}</td>
<td>{{$donorList->blood_group}}</td>
<td>{{$donorList->Contact}}</td>
<td>{{$donorList->address}}</td>
<td>{{$donorList->last_donation_date}}</td>
<td>
    <a class="btn btn-success" href="">Edit</a>
    <a class="btn btn-danger" href="">Delete</a>
</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$donorLists->links()}}

@endsection
