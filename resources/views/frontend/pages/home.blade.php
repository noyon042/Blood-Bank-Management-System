@extends('frontend.master')


@section('content')



<div class="slider-detail">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{url('/frontend/assets/images/slider/slide-02.jpg')}}"
                    alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                    <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo
                        neque, <br>
                        aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                        sed sagittis at, sagittis quis neque. Praesent.</p>

                    <div class=" vbh">

                        <div class="btn btn-success  bounceInUp"> Book Appointment </div>
                        <div class="btn btn-success  bounceInUp"> Contact US </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{url('/frontend/assets/images/slider/slide-03.jpg')}}"
                    alt="Third slide">
                <div class="carousel-caption vdg-cur d-none d-md-block">
                    <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                    <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo
                        neque, <br>
                        aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                        sed sagittis at, sagittis quis neque. Praesent.</p>

                    <div class=" vbh">

                        <div  class="btn btn-danger text-white  bounceInUp"><a href="{{route('donor.list')}}"><span class="text-white">All Post List </span></div></a>
                        <div class="btn btn-danger  bounceInUp"> Contact US </div>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>




<!--*************** About Us Starts Here ***************-->
<section id="about" class="contianer-fluid about-us">



    <div class="container">

        {{-- <div class="row"> --}}

            {{-- @foreach ($members as $mem)



            <div class="col-md-3 col-sm-6 vd">
                <div class="bkjiu">
                    <img src="{{url('/uploads/'.$mem->image)}}" alt="" />
                    <h4>{{$mem->id}}</h4>
                    <h4>{{$mem->name}}</h4>
                    <h4>{{$mem->role}}</h4>
                    <h4>{{$mem->email}}</h4>
                    <h4>{{$mem->blood_group}}</h4>
                    <h4>{{$mem->contact}}</h4>
                    <h4>{{$mem->address}}</h4>



                    <button class="btn btn-sm btn-danger">Readmore <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            @endforeach --}}





            {{-- <section id="gallery">
                <div class="container">
                    <div class="row">
                        @foreach ($members as $mem )
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="{{url('/uploads/'.$mem->image)}}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h6>ID: {{$mem->id}}</h6>
                                    <h6>Name: {{$mem->name}}</h6>
                                    <h6>Role: {{$mem->role}}</h6>
                                    <h6>Email: {{$mem->email}}</h6>
                                    <h6>Blood Group: {{$mem->blood_roup}}</h6>
                                    <h6>Contact: {{$mem->contact}}</h6>
                                    <h6>Address: {{$mem->address}}</h6>
                                    <a href="" class="btn btn-outline-success btn-sm">Read More</a>

                                </div>
                            </div>
                        </div>
                        @endforeach
            </section> --}}


            {{--
        </div> --}}
        <div class="d-flex justify-content-center">


            <section id="gallery">
                <div class="container ">
                    <div class="row">

                        <div class="col-lg-9 mb-4">
                            <div class="card">
                                <img src="{{url('/frontend/assets/images/gallery/g2.jpg')}}">
                                <div class="card-body">
                                    <h3>Donation Post</h3>
                                    <a href="{{route('web.blood.donate')}}" class="btn btn-outline-success btn-sm">View All</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="gallery">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 mb-4">
                            <div class="card">
                                <img src="{{url('/frontend/assets/images/gallery/g1.jpg')}}">
                                <div class="card-body">
                                    <h3>Recepient Post</h3>
                                    <a href="{{route('web.blood.receive')}}" class="btn btn-outline-success btn-sm">View All</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <div class="row session-title">
            <h2>About Us</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
        </div>
        <div class="row">
            <div class="col-md-6 text">
                <h2>About Blood Doners</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
                <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some formhumour, or randomised words which don't look even slightly believable. If you
                    are going to use a passage. industry's standard dummy has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p>Industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="col-md-6 image">
                <img src="{{url('/frontend/assets/images/gallery/g1.jpg')}}">
            </div>
        </div>

    </div>
</section>



<!-- ################# Gallery Start Here #######################--->

<div id="gallery" class="gallery container-fluid">
    <div class="container">
        <div class="row session-title">
            <h2>Checkout Our Gallery</h2>
        </div>
        <div class="gallery-row row">
            <div id="gg-screen"></div>
            <div class="gg-box">
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g1.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g2.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g3.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g4.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g5.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g6.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g7.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g8.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g9.jpg')}}">
                </div>
                <div class="gg-element">
                    <img src="{{url('/frontend/assets/images/gallery/g10.jpg')}}">
                </div>


            </div>
        </div>
    </div>
</div>



<!-- ################# Donation Process Start Here #######################--->

<section id="process" class="donation-care">
    <div class="container">
        <div class="row session-title">
            <h2>Donation Process</h2>
            <p>The donation process from the time you arrive center until the time you leave</p>
        </div>



    </div>
</section>




<!--################### Our Blog Starts Here #######################--->
<div id="blog" class="blog-container contaienr-fluid">
    <div class="container">

        <div class="row news-row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>





<!--*************** Footer  Starts Here *************** -->
<footer id="contact" class="container-fluid">
    <div class="container">

        <div class="row content-ro">


            <div class="col-lg-4 col-md-12 footer-form">
                <div class="form-card">
                    <div class="form-title">
                        <h4>Quick Message</h4>
                    </div>
                    <div class="form-body">
                        <input type="text" placeholder="Enter Name" class="form-control">
                        <input type="text" placeholder="Enter Mobile no" class="form-control">
                        <input type="text" placeholder="Enter Email Address" class="form-control">
                        <input type="text" placeholder="Your Message" class="form-control">
                        <button class="btn btn-sm btn-primary w-100">Send Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>
        @endsection
