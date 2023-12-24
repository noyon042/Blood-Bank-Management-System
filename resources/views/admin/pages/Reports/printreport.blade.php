@extends('admin.master')
@section('content')
    <br>
    <button class="btn btn-info" onclick="printContent('printDiv')">Print Report</button>

    <div id="printDiv">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> ID</th>
                    <th>Recipient Name</th>
                    <th>Last Donation Date</th>
                    <th>Donor Name</th>
                    <th>Blood Group</th>
                    <th>Donor Email</th>
                    <th>Donor Contact</th>
                    <th>Donor Address</th>

                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>{{$report->id}}</td>
                        <td>{{$report->user->name}}</td>
                        <td>{{$report->memberPost->date}}</td>
                        <td>{{$report->memberPost->name}}</td>
                        <td>{{$report->memberPost->blood_group}}</td>
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












{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Blood Donation Report</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th> ID</th>
                <th>Recipient Name</th>
                <th>Last Donation Date</th>
                <th>Donor Name</th>
                <th>Blood Group</th>
                <th>Donor Email</th>
                <th>Donor Contact</th>
                <th>Donor Address</th>
            </tr>
        </thead>
        <tbody>
            <!-- Replace the data below with your actual data -->
            <tr>
                <td>{{$report->id}}</td>
                <td>{{$report->user->name}}</td>
                <td>{{$report->memberPost->date}}</td>
                <td>{{$report->memberPost->name}}</td>
                <td>{{$report->memberPost->blood_group}}</td>
                <td>{{$report->memberPost->email}}</td>
                <td>{{$report->memberPost->contact}}</td>
                <td>{{$report->memberPost->address}}</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <button class="btn btn-primary" onclick="printPage()">Print Report</button>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript function to print the page -->
<script>
    function printPage() {
        window.print();
    }
</script>

</body>
</html>



 --}}
