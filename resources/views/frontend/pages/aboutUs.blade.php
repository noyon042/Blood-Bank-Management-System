@extends('frontend.master')


@section('content')
    <div style="margin: auto;width:90%">
        <div class="row session-title">
            <h2>About Us</h2>

        </div>
        <div class="row">
            <div style="margin: 7px 0px 40px 0px" class="col-md-6 text">
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
                <img style="margin: 96px 171px 0px" src="{{ url('/frontend/assets/images/gallery/g1.jpg') }}">
            </div>
        </div>

    </div>



    <!-- ################# Gallery Start Here #######################--->

    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="row session-title">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                <div id="gg-screen"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="gg-element col-4>
            <img src="{{ url('/frontend/assets/images/gallery/g1.jpg') }}">
                        </div>
                        <div class="gg-element mb-5 col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g2.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g3.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g4.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g5.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g6.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g7.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g8.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g9.jpg') }}">
                        </div>
                        <div class="gg-element  mb-5  col-4">
                            <img src="{{ url('/frontend/assets/images/gallery/g10.jpg') }}">
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
