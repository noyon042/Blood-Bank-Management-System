@extends('admin.master')
@section('content')
<h1>Recepient Form</h1>


<form action="{{route('recepient.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" id="" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="bloodType">Blood Type</label>
        <input type="text" class="form-control" name="blood_group" id="" placeholder="Enter your blood type" required>
    </div>
    <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" class="form-control" name="phn_number" id="" placeholder="Enter your phone number" required>
    </div>

    <div class="form-group">
        <label for="hospitalName">Hospital Name</label>
        <input type="text" class="form-control" name="hospital_name" id="" placeholder="Enter the hospital name" required>
    </div>
    <div class="form-group">
        <label for="dateNeeded">Date of Blood Needed</label>
        <input type="date" class="form-control" name="date_of_need" id="" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
