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

                     <a href="{{route('aboutUs')}}">  <div class="btn btn-success  bounceInUp"> About Us </div></a>
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

                        <a href="{{route('donor.list')}}"> <div  class="btn btn-danger text-white  bounceInUp">All Post List</div></a>
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
{{-- <section id="about" class="contianer-fluid about-us"> --}}



    <div style="margin: 90px auto 50px" class="container d-flex justify-content-center">


        <div class="d-flex justify-content-center">


            <section id="gallery">
                <div class="container ">
                    <div class="row d-flex justify-content-center">

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
    </div>






<!--*************** Footer  Starts Here *************** -->
{{-- <footer id="contact" class="container-fluid">
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


</footer> --}}
 @endsection
