@extends('admin.master')
@section('content')
<h1>Manage Blood List</h1>


<a href="{{route('manageblood.create')}}" class="btn btn-success">Manage Blood</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Select Donor Name</th>
      <th scope="col">Donor Contact</th>
      <th scope="col">Recepient Name</th>
      <th scope="col">Patient Hospital</th>
      <th scope="col">Date Of Blood Needed</th>

      <th scope="col">Location</th>
      {{-- <th scope="col">Expiry Date</th> --}}
      <th scope="col">Reason For Mangement</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


  @foreach ($bloodgroups as $bloodgroup)

<tr>

<th scope="row">{{$loop->iteration}}</th>
<td>{{$bloodgroup->blood_id}}</td>
<td>{{$bloodgroup->donor_name}}</td>
<td>{{$bloodgroup->contact}}</td>
<td>{{$bloodgroup->name}}</td>
<td>{{$bloodgroup->hospital_name}}</td>
<td>{{$bloodgroup->date_of_need}}</td>

<td>{{$bloodgroup->location}}</td>
{{-- <td>{{$bloodgroup->expiry_date}}</td> --}}
<td>{{$bloodgroup->reason}}</td>

<td>
    <a class="btn btn-success" href="">View</a>
<a class="btn btn-primary" href="">Edit</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
@endforeach
  </tbody>
</table>

 @endsection
