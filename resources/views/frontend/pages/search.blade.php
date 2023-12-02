@extends('frontend.master')
@section('content')

<div class="mx-4 my-4">
<div style="text-align: center" class="mb-3">
    {{-- <h1>Blood Donation List</h1> --}}
</div>
<section id="gallery">
    <div class="container", style="text-align: center">
        <div class="row">
            {{-- @dd($donate) --}}

    <h2>Search result for : {{ request()->search }} found {{$members->count()}} members.</h2>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

     @if($members->count()>0)

            @foreach ($members as $mem )

           @if($mem->status=='Approved')

            <div class="col-lg-4 mb-4">
                <div class="card">

                    <a href="{{route('member.singleview',$mem->id)}}">
                        <img src="{{ url('/uploads/'.$mem->image) }}" alt="" class="card-img-top" style="height: 300px; width: 360px;">
                        <div class="card-body">
                        <h6>ID: {{$mem->id}}</h6>
                        <h6>Name: {{$mem->name}}</h6>
                        <h6>Role: {{$mem->role}}</h6>
                        {{-- <h6>Email: {{$mem->email}}</h6> --}}
                        <h6>Blood Group: {{$mem->blood_group}}</h6>
                        {{-- <h6>Contact: {{$mem->contact}}</h6> --}}
                        {{-- <h6>Address: {{$mem->address}}</h6> --}}
                        <h6>Last Donation Date: {{$mem->date}}</h6>

                    </a>

                    <div>
                        @if ($differences[$mem->id] > 120)

                        <div class="alert alert-success">
                            Available
                        </div>
                    @else
                    <div class="alert alert-danger">
                        Unavailable
                    </div>
                    @endif

                    </div>
                    <div>
                        <a href="{{route('member.singleview',$mem->id)}}" class="btn btn-outline-success btn-sm">Request For Blood</a>
                    </div>

                    </div>

                </div>
            </div>
            @endif
            @endforeach

        </div>


        @else

        <div style="text-align: center">
            <br><br><br>
            <h1 style="text-align: center">No member found.</h1>

        </div>

    @endif

    </section>
</div>
@endsection


