@extends('frontend.master')
@section('content')

<div class="mx-4 my-4">
<div style="text-align: center" class="mb-3">
    <h1>Blood Donation List</h1>
</div>
<section id="gallery">
    <div class="container">
        <div class="row">
            @foreach ($donate as $mem )
            <div class="col-lg-4 mb-4">
                <div class="card">

                    <a href="{{route('member.singleview',$mem->id)}}">
                    <img src="{{url('/uploads/'.$mem->image)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6>ID: {{$mem->id}}</h6>
                        <h6>Name: {{$mem->name}}</h6>
                        <h6>Role: {{$mem->role}}</h6>
                        {{-- <h6>Email: {{$mem->email}}</h6> --}}
                        <h6>Blood Group: {{$mem->blood_roup}}</h6>
                        {{-- <h6>Contact: {{$mem->contact}}</h6> --}}
                        {{-- <h6>Address: {{$mem->address}}</h6> --}}
                        <h6>Last Donation Date: {{$mem->date}}</h6>

                    </a>
                        <a href="#" class="btn btn-outline-success btn-sm">Request For Blood</a>

                    </div>

                </div>
            </div>
            @endforeach
        </div>
</section>
</div>
@endsection
