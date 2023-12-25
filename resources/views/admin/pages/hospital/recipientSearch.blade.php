@extends('admin.master')

@section('content')

<h2>Search result for : {{ request()->search }} found {{$recipients->count()}} hospitals.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($recipients->count()>0)
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

    @foreach ($recipients as $key=> $hos)

    <tr>

        <th scope="row">{{ $key+1}}</th>
        <td>{{$hos->name}}</td>
        <td>{{$hos->address}}</td>
        <td>{{$hos->blood_group}}</td>

        <td>
            {{-- <a class="btn btn-success" href="">Edit</a> --}}
            <a class="btn btn-danger" href="{{route('recepient.delete',$hos->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach

</table>

                @else

                    <h1>No hospital found.</h1>
                @endif


</div>
@endsection
