@extends('admin.master')

@section('content')

<h2>Search result for : {{ request()->search }} found {{$donors->count()}} donors.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($donors->count()>0)
<table class="table table-bordered">
    <thead class="bg-dark text-white">
        <tr class="text-center">
            <th scope="col">Donor ID</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Contact</th>
            <th scope="col">Hospital Name/Address</th>
            <th scope="col">Last Donation Date</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>

            <th scope="col">Action</th>

        </tr>

    </thead>
    <tbody>

    @foreach ($donors as $key=>$donorList)

        <tr>

<th scope="row">{{ $key+1 }}</th>
<td>{{$donorList->name}}</td>
<td>{{$donorList->email}}</td>
<td>{{$donorList->blood_group}}</td>
<td>{{$donorList->contact}}</td>
<td>{{$donorList->address}}</td>
<td>{{$donorList->date}}</td>
<td><img class="img" src="{{url('/uploads/'.$donorList->image)}}" style=" border-radius: 50%; height: 60px;width: 60px;" alt=""></td>
<td>{{$donorList->status}}</td>

{{-- <td>
@if($donorList->status=='pending')
<a class="btn btn-danger" href="{{route('admin.approval',$donorList->id)}}">Approve Donar</a>
@endif
</td> --}}

<td>
    <a class="btn bg-success text-white" href="{{route('donor.edit',$donorList->id)}}">Edit</a>

    @if($donorList->status=='pending')
<a class="btn btn-danger" href="{{route('admin.approval',$donorList->id)}}">Approve Donar</a>
@endif

    <a class="btn btn-danger" href="{{route('donorlist.delete',$donorList->id)}}">Delete</a>


</td>
        </tr>
        @endforeach
    </tbody>
</table>

                @else

                    <h1>No donor found.</h1>
                @endif


</div>
@endsection
