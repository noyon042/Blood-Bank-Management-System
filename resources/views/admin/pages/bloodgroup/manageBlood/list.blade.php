@extends('admin.master')
@section('content')
<h1>Manage Blood List</h1>


<a href="{{route('manageblood.create')}}" class="btn btn-success">Manage Blood</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Blood ID</th>
      <th scope="col">Location</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Reason For Mangement</th>
    </tr>
  </thead>
  <tbody>


  @foreach ($bloodgroups as $bloodgroup)

<tr>

<th scope="row">{{ $bloodgroup->id }}</th>
<td>{{$bloodgroup->location}}</td>
<td>{{$bloodgroup->expiry_date}}</td>
<td>{{$bloodgroup->reason}}</td>

<td>
<a class="btn btn-success" href="">Edit</a>
<a class="btn btn-danger" href="">Delete</a>
</td>
</tr>
@endforeach
 @endsection
