<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .img {
                border-radius: 50%;
                height: 60px;
                width: 60px;
            }
        </style>
    </head>

    <body>

        @extends('admin.master')
        @section('content')
            <h1>Donate Blood</h1>
            <a href="{{ route('donorlist.form') }}" class="btn btn-success">Create New Donor</a>

            <div class="container mt-4 d-flex justify-content-end col-md-12 mb-3 ">
                <div class="col-md-6">
                    <form action="{{ route('donar.search') }}" method="get" class="form-inline justify-content-end">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Donar Name..." name="search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-warning">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

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

                    @foreach ($donorLists as $key => $donorList)
                        {{-- <tr class="text-capitalize"> --}}
                            <tr>


                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>{{ $donorList->name }}</td>
                            <td>{{ $donorList->email }}</td>
                            <td>{{ $donorList->blood_group }}</td>
                            <td>{{ $donorList->contact }}</td>
                            <td>{{ $donorList->address }}</td>
                            <td>{{ $donorList->date }}</td>
                            <td>
                                @if ($donorList->image)
                                    <img class="img" src="{{ url('/uploads/' . $donorList->image) }}" alt="">
                            </td>
                            {{-- <img class="img" src="{{url('/uploads/'.$donorList->image)}}" alt=""></td> --}}
                        @else
                            <img class="img" src="{{ url('/uploads/default.jpg') }}" alt=""></td>
                    @endif
                    <td>{{ $donorList->status }}</td>

                    {{-- <td>
@if ($donorList->status == 'pending')
<a class="btn btn-danger" href="{{route('admin.approval',$donorList->id)}}">Approve Donar</a>
@endif
</td> --}}

                    <td>
                        <a class="btn bg-success text-white" href="{{ route('donor.edit', $donorList->id) }}">Edit</a>

                        @if ($donorList->status == 'pending')
                            <a class="btn btn-warning" href="{{ route('admin.approval', $donorList->id) }}">Approve</a>
                        @endif

                        <a class="btn btn-danger" href="{{ route('donorlist.delete', $donorList->id) }}">Delete</a>

                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{$donorLists->links()}} --}}
        @endsection
    </body>

</html>
