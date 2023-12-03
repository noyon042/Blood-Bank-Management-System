


@extends('frontend.master')
@section('content')

<div class="mx-4 my-4">
<div style="text-align: center" class="mb-3">

</div>
<section id="gallery">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 mb-4">
                <div class="card">

                    <img src="{{url('/uploads/'.$singleMember->image)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h6>ID: {{$singleMember->id}}</h6>
                        <h6>Name: {{$singleMember->name}}</h6>
                        <h6>Role: {{$singleMember->role}}</h6>
                        <h6>Email: {{$singleMember->email}}</h6>
                        <h6>Blood Group: {{$singleMember->blood_group}}</h6>
                        <h6>Contact: {{$singleMember->contact}}</h6>
                        <h6>Address: {{$singleMember->address}}</h6>
                        <h6>Image: {{$singleMember->image}}</h6>
                        <h6>Date: {{$singleMember->date}}</h6>



                  @if (auth()->user()->id!=$singleMember->user_id)
                        <a href="{{route('apply.now',$singleMember->id)}}" class="btn btn-outline-success btn-sm">Apply Now</a>
                        @else
                        <p style="color: red;margin-top:5px;">This is your post.</p>
                        @endif
                        
                    </div>
                </div>
            </div>

        </div>
</section>
</div>
@endsection


