@extends('admin.master')
@section('content')

{{-- <a href="{{route('hospital.form')}}" class="btn btn-success">Create Hospital Form</a> --}}

<div class="container mt-4 d-flex justify-content-end col-md-12 mb-3 ">
    <div class="col-md-6">
      <form action="{{ route('hospital.search') }}" method="get" class="form-inline justify-content-end">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Hospital/Address..." name="search">
          <div class="input-group-append">
            <button type="submit" class="btn btn-warning">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>

<table class="table table-striped">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col"> ID</th>
            <th scope="col">Donor Name </th>
            <th scope="col">Hospital Name/Address </th>

            <th scope="col">Availabe Blood Group</th>
            <th scope="col">Action</th>

        </tr>

    </thead>

    @foreach ($hospitalAddress as $key=> $hos)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$hos->name}}</td>
        <td>{{$hos->address}}</td>
        <td>{{$hos->blood_group}}</td>

        <td>
            {{-- <a class="btn btn-success" href="">Edit</a> --}}
            <a class="btn btn-danger" href="{{route('donor.delete',$hos->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
