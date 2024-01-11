<header class="continer-fluid ">
    <div class="header-top col-md-12" style="height: 57px;">


        <div style="" class="container mt-4 row justify-content-right col-md-12">
            <div class="row justify-content-right col-md-12">
              <div class="col-md-6">
                <form action="{{ route('memberPost.search') }}" method="get" class="form-inline">
                  <div class="input-group " style="    position: absolute;
                  top: 10px; left:0px; width:324px;">
                    <input type="text" style="border-radius: 9px" class="form-control" placeholder="Search BloodGroup..." name="search">
                    <div class="input-group-append">
                      <button type="submit" style="background: #ffccd3;
                      padding: 6px 15px;
                      position: absolute;
                      right: 5px;
                      top: 5px;
                      color: red;
                      border-radius: 9px;
                      z-index: 12;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        <div class="container">

               {{-- <form action="{{route('memberPost.search')}}" method="get">
                <input class="inline-block p-2" type="text" class="form-control" placeholder="Search BloodGroup..." name="search" >
                <button type="submit" class="btn btn-success p-1">Search</button>
            </form> --}}
            {{-- <div class="container mt-4">
                <div class="row justify-content-right col-md-12">
                  <div class="col-md-6">
                    <form action="{{ route('memberPost.search') }}" method="get" class="form-inline">
                      <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Search BloodGroup..." name="search">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-warning">Search</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div> --}}



            <div class=" row col-det">


                <div class="col-lg-6 col-md-12">
                    <ul class="ulright">

                        @guest
                        <li>

                            <a class="a btn btn-info" style="    position: absolute;
                            right: -669px;
                            top: 11px;
                            " href="{{route('member.registration')}}">Registration</a>
                           </li>
                        <li>
                            <a class="a btn btn-warning" style="position: absolute;
                            right: -746px; top:11px" href="{{route('member.login')}}">login</a>
                            </li>
                            @endguest

                            {{-- <li>
                                <a style="color: white" href="{{route('member.logout')}}">Log Out</a>
                                </li> --}}


                    </ul>

                </div>

                @auth
                <a class="a btn btn-warning" style="position: absolute;
                right: 13px; top:11px" href="{{route('member.logout')}}">Log Out </a>
                {{-- <span style="color: white" >|</span> --}}

                <a class="badge badge-info" style="    color: white;
                height: 28px;
                font-size: medium;
                position: absolute;
                left: 699px;
                top: 16px;" href="{{route('member.profile')}}"> Profile:{{auth()->user()->name}} ({{ auth()->user()->role }})</a>
                @endauth

            </div>
        </div>
    </div>
    <div id="menu-jk" class="header-bottom">
        <div class="">
            <div class="row nav-row m-auto">
                <div class="col-md-3 logo">
                    <img src="{{url('/frontend/assets/images/logo.jpg')}}" alt="">
                </div>
                <div class="col-md-9 nav-col" style="margin-top:14px;">
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
                                    <a class="nav-link" href="{{route('home')}}">Home
                                    </a>
                                </li>

{{--
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.login')}}">Admin</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('member.post')}}">Post</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('myPost')}}">My Post</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('web.blood.donate')}}">Blood Donar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('web.blood.receive')}}">Blood Reciever</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('donor.list')}}">All Post List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('ActiveDonor')}}">Active Donor</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
