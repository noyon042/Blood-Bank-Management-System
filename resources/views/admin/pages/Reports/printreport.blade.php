@extends('admin.master')
@section('content')
<style>
    @media print {
        .btn btn-info {
            display: none;
        }
    }

</style>

    <button class="btn btn-info" onclick="printContent('printDiv')" >Print Report</button>



            <div class="d-flex flex-column align-items-center justify-content-stretch mt-5"  id="printDiv">
                <div class="center-image mb-3">
                    <img src="http://localhost:8000/frontend/assets/images/logo.jpg" alt="Logo" class="img-fluid">
                </div> <br><br>
            <div class=" flex">
                <div class="user-info" style="margin-right: 150px">
                    <h2>Recipient Info</h2>
                    <hr>
                    <p><strong>Name:</strong> {{$report->user->name}}</p>
                    <hr>
                    <p><strong>Contact:</strong> {{$report->user->contact}}</p>
                    <hr>
                    <p><strong>Hospital Name/Address:</strong> {{$report->user->address}}</p>
                    <hr>
                    <p><strong>Email:</strong> {{$report->user->email}}</p>
                    <hr>
                </div>
                <div class="user-info">
                    <h2>Donar Info</h2>
                    <hr>
                    <p><strong>DonarName:</strong> {{$report->memberPost->name}}</p>
                    <hr>
                    <p><strong>Blood Group:</strong> {{$report->memberPost->blood_group}}</p>
                    <hr>
                    <p><strong>Contact:</strong> {{$report->memberPost->contact}}</p>
                    <hr>
                    <p><strong>Hospital Name/Address:</strong> {{$report->memberPost->address}}</p>
                    <hr>
                    <p><strong>Last Donation Date:</strong> {{$report->memberPost->date}}</p>
                    <hr>
                    <p><strong>Email:</strong> {{$report->memberPost->email}}</p>
                    <hr>
                </div>
            </div>
            <hr>
            {{-- <table class="table table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th> ID</th>
                        <th>Recipient Name</th>
                        <th>Donor Name</th>
                        <th>Blood Group</th>
                        <th>Last Donation Date</th>
                        <th>Donor Email</th>
                        <th>Donor Contact</th>
                        <th>Donor Address</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{$report->id}}</td>
                            <td>{{$report->user->name}}</td>
                            <td>{{$report->memberPost->name}}</td>
                            <td>{{$report->memberPost->blood_group}}</td>
                            <td>{{$report->memberPost->date}}</td>
                            <td>{{$report->memberPost->email}}</td>
                            <td>{{$report->memberPost->contact}}</td>
                            <td>{{$report->memberPost->address}}</td>
                        </tr>
                </tbody>
            </table> --}}


            <footer class="bg-white" id="contact">
                <div class="container bg-white">
                    <div class="row content-row">
                        <div class="col-lg-4 col-md-12 footer-contact">
                            <h2>Contact Informations</h2>
                            <div class="address-row">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="detail">
                                    <p>4 Embankment Drive Road,Sector-10, Uttara Model Town, Dhaka-1230.
                                    </p>
                                </div>
                            </div>
                            <div class="address-row">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="detail">
                                    <p>noyonmahmud042@gmail.com <br> support@bbms.com</p>
                                </div>
                            </div>
                            <div class="address-row">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="detail">
                                    <p>++880 1775765888 <br> ++880 1701476579</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </footer>


                </div>


@endsection


@push('yourJsCode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush




















{{-- @extends('frontend.master')
@section('content')
    <br>
    <button class="btn btn-info" onclick="printContent('printDiv')">Print Report</button>

    <div id="printDiv">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Recipient Name</th>
                    <th>Donor Name</th>
                    <th>Blood Group</th>
                    <th>Last Donation Date</th>
                    <th>Donor Email</th>
                    <th>Donor Contact</th>
                    <th>Donor Address</th>

                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>{{$report->id}}</td>
                        <td>{{auth()->user()->name}}</td>
                        <td>{{$report->memberPost->name}}</td>
                        <td>{{$report->memberPost->blood_group}}</td>
                        <td>{{$report->memberPost->date}}</td>
                        <td>{{$report->memberPost->email}}</td>
                        <td>{{$report->memberPost->contact}}</td>
                        <td>{{$report->memberPost->address}}</td>
                    </tr>

            </tbody>
        </table>

    </div>

@endsection


@push('yourJsCode')
    <script type="text/javascript">
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
@endpush
























 --}}
