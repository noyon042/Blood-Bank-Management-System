


@extends('frontend.master')
@section('content')

<div class="mx-4 my-4">
<div style="text-align: center" class="mb-3">
    <h1>Blood Recepient List</h1>
</div>
<section id="gallery">
    <div class="container">
        <div class="row">
            @foreach ($receive as $sekeer )
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <a href="{{route('recepient.singleView',$sekeer->id)}}">
                        @if ($sekeer->image)
                        <img src="{{url('/uploads/'.$sekeer->image)}}" alt="" class="card-img-top" style="height: 300px; width: 360px;">
                         @else
                         <img src="{{ url('/uploads/default.jpg') }}" alt="" class="card-img-top" style="height: 300px; width: 360px;">

                        @endif
                    {{-- <img src="{{url('/uploads/'.$sekeer->image)}}" alt="" class="card-img-top" style="height: 300px; width: 360px;"> --}}
                    <div class="card-body">
                        <h6>ID: {{$sekeer->id}}</h6>
                        <h6>Name: {{$sekeer->name}}</h6>
                        <h6>Role: {{$sekeer->role}}</h6>
                        {{-- <h6>Email: {{$sekeer->email}}</h6> --}}
                        <h6>Blood Group: {{$sekeer->blood_group}}</h6>
                        {{-- <h6>Contact: {{$sekeer->contact}}</h6> --}}
                        {{-- <h6>Address: {{$sekeer->address}}</h6> --}}
                        <h6>Date of Needed: {{$sekeer->date}}</h6>

                    </a>
                        <a href="{{route('recepient.singleView',$sekeer->id)}}" class="btn btn-outline-success btn-sm">Donate Now</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>
</div>
@endsection


