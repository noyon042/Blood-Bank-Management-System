@extends('admin.master')

@section('content')

<h1>Request Received By Donor</h1>

<form action="" method="post">
    @csrf

    <div class="form-group">
        <label for=""> Request ID:</label>
        <input type="text" name="request_id" class="form-control" id="" placeholder="Request ID">
    </div>
    <div class="form-group">
        <label for="name">Requester's Name:</label>
        <input type="text" class="form-control" name="requester_name" id="" placeholder="Requester's Name" required>
    </div>
    <div class="form-group">
        <label for="bloodType">Request Date:</label>
        <input type="date" class="form-control" name="request_date" id="" placeholder="Request Date" required>
    </div>
    <div class="form-group">
        <label for="phoneNumber">Request Details:</label>
        <input type="text" class="form-control" name="request_details" id="" placeholder="Request Details" required>
    </div>

    <div class="form-group">
        <label for="hospitalName">Your Response:</label>
        <input type="response" class="form-control" name="your_response" id="" placeholder="Your Response" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection