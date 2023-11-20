@extends('admin.master')
@section('content')
<h1>Donate Blood</h1>
<a href="{{route('donorlist.form')}}" class="btn btn-success">Create New List</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Donor ID</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Last Donation Date</th>
            <th scope="col">Image</th>

        </tr>

    </thead>
    <tbody>

    @foreach ($donorLists as $key=>$donorList)

        <tr>

<th scope="row">{{ $key+1 }}</th>
<td>{{$donorList->donor_name}}</td>
<td>{{$donorList->email}}</td>
<td>{{$donorList->blood_group}}</td>
<td>{{$donorList->contact}}</td>
<td>{{$donorList->address}}</td>
<td>{{$donorList->last_donation_date}}</td>
<td><img class="img" src="{{url('/uploads/'.$donorList->image)}}" alt=""></td>
<td>
    <a class="btn btn-success" href="{{route('donor.edit',$donorList->id)}}">Edit</a>
    <a class="btn btn-danger" href="{{route('donorlist.delete',$donorList->id)}}">Delete</a>
</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$donorLists->links()}}

@endsection
