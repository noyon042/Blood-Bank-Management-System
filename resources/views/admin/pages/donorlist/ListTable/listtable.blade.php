@extends('admin.master')
@section('content')
<h1>Donate Blood</h1>
<a href="{{route('donorlist.store')}}" class="btn btn-success">Create New List</a>
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


            <!-- <td>201</td>
            <td>Noyon</td>
            <td>A+</td>
            <td>01712346788</td>
            <td>Uttara</td>
            <td>Male</td>
        </tr>
        <tr>
            <td>202</td>
            <td>Larry</td>
            <td>B+</td>
            <td>0165356667</td>
            <td>Uttara</td>
            <td>Male</td>
        </tr> -->
        <!-- <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>uu</td>
            <td>999</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>uu</td>
            <td>999</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>uu</td>
            <td>999</td>
        </tr> -->
    </tbody>
</table>

@endsection