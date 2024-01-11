@extends('frontend.master')
@section('content')
    <div class="mx-4 my-4">
        <div style="text-align: center" class="mb-3">
            <h1>Blood Donation List</h1>
        </div>
        <section id="gallery">
            <div class="container">
                <div class="row">
                    {{-- @dd($donate) --}}
                    @foreach ($donate as $mem)
                        @if ($mem->status == 'Approved' && auth()->user()->id!=$mem->user_id)
                            <div class="col-lg-4 mb-4">
                                <div class="card">

                                    <a href="{{ route('member.singleview', $mem->id) }}">
                                        {{-- <img src="{{ url('/uploads/'.$mem->image) }}" alt="" class="card-img-top" style="height: 300px; width: 360px;"> --}}
                                        @if ($mem->image)
                                            <img src="{{ url('/uploads/' . $mem->image) }}" alt="" class="card-img-top"
                                                style="height: 300px; width: 360px;">
                                        @else
                                            <img src="{{ url('/uploads/default.jpg') }}" alt="" class="card-img-top"
                                                style="height: 300px; width: 360px;">
                                        @endif

                                        <div class="card-body">
                                            <h6>ID: {{ $mem->id }}</h6>
                                            <h6>Name: {{ $mem->name }}</h6>
                                            <h6>Role: {{ $mem->role }}</h6>
                                            {{-- <h6>Email: {{$mem->email}}</h6> --}}
                                            <h6>Blood Group: {{ $mem->blood_group }}</h6>
                                            {{-- <h6>Contact: {{$mem->contact}}</h6> --}}
                                            {{-- <h6>Address: {{$mem->address}}</h6> --}}
                                            <h6>Last Donation Date: {{ $mem->date }}</h6>

                                    </a>

                                    <div>
                                        @if ($differences[$mem->id] > 120)
                                            <div class="alert alert-success">
                                                Available
                                            </div>
                                            <div>
                                                <a href="{{ route('member.singleview', $mem->id) }}"
                                                    class="btn btn-outline-success btn-sm">Request For Blood</a>
                                            </div>
                                        @else
                                            <div class="alert alert-danger">
                                                Unavailable
                                            </div>
                                        @endif

                                    </div>
                                    {{-- <div>
                        <a href="{{route('member.singleview',$mem->id)}}" class="btn btn-outline-success btn-sm">Request For Blood</a>
                    </div> --}}

                                </div>

                            </div>
                </div>
                @endif
                @endforeach
            </div>
        </section>
    </div>
@endsection
