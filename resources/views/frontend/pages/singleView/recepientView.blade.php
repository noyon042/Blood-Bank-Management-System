


@extends('frontend.master')
@section('content')

<div class="mx-4 my-4">
<div style="text-align: center" class="mb-3">

</div>
<section id="gallery">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 mb-4" style="margin: auto">
                <div class="card">

                    @if ($singleRecepient->image)
                    <img src="{{url('/uploads/'.$singleRecepient->image)}}" alt="" class="card-img-top" style="height: 300px; width: 360px;">
                    {{-- <img src="{{url('/uploads/'.$singleRecepient->image)}}" alt="" class="card-img-top" style="height: 300px; width: 360px;"> --}}
                     @else
                     <img src="{{url('/uploads/default.jpg')}}" alt="" class="card-img-top" style="height: 300px; width: 360px;">


                    @endif
                    <div class="card-body">
                        <h6>ID: {{$singleRecepient->id}}</h6>
                        <h6>Name: {{$singleRecepient->name}}</h6>
                        <h6>Role: {{$singleRecepient->role}}</h6>
                        <h6>Email: {{$singleRecepient->email}}</h6>
                        <h6>Blood Group: {{$singleRecepient->blood_group}}</h6>
                        <h6>Contact: {{$singleRecepient->contact}}</h6>
                        <h6>Hospital Name/Address: {{$singleRecepient->address}}</h6>
                        <h6>Image: {{$singleRecepient->image}}</h6>
                        <h6>Date of Needed: {{$singleRecepient->date}}</h6>


                        {{-- <a href="{{route('apply.now',$singleMember->id)}}" class="btn btn-outline-success btn-sm">Apply Now</a> --}}

                    </div>
                </div>
            </div>

        </div>
</section>
</div>
@endsection


