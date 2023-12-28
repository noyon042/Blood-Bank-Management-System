<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @notifyCss
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank Management System</title>
    <link rel="shortcut icon" href="{{url('/frontend/assets/images/fav.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{url('/frontend/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{url('/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/assets/plugins/grid-gallery/css/grid-gallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend/assets/css/style.css')}}" />

    <style>
        .notify{
            z-index: 9999;
        }


    </style>
</head>

<body>
    @include('notify::components.notify')
    @include('frontend.partials.header')


    {{-- @include('notify::components.notify') --}}


    @yield('content')


    @include('frontend.partials.footer')



@notifyJs
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{url('/frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('/frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{url('/frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/frontend/assets/plugins/grid-gallery/js/grid-gallery.min.js')}}"></script>
    <script src="{{url('/frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
    <script src="{{url('/frontend/assets/js/script.js')}}"></script>
    @stack('yourJsCode')

</body>

</html>
