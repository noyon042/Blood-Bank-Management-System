<header class="continer-fluid ">
    <div class="header-top">
        <div class="container">
            <div class="row col-det">


                <div class="col-lg-6 col-md-12">
                    <ul class="ulright">

                        @guest
                        <li>

                            <a style="color: white" href="{{route('member.registration')}}">Registration</a>
                            <span>|</span></li>
                        <li>
                            <a style="color: white" href="{{route('member.login')}}">login</a>
                            </li>
                            @endguest

                            {{-- <li>
                                <a style="color: white" href="{{route('member.logout')}}">Log Out</a>
                                </li> --}}


                    </ul>

                </div>

                @auth
                <a style="color: white" href="{{route('member.logout')}}">Log Out</a>
                @endauth

            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <img src="{{url('/frontend/assets/images/logo.jpg')}}" alt="">
                </div>
                <div class="col-md-9 nav-col">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.login')}}">Admin</a>
                                </li>

                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#gallery">Gallery</a>
                                </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('member.post')}}">Post</a>
                                </li>

                                 <li class="nav-item">
                                    <a class="nav-link" href="#process">Process</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact US</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
