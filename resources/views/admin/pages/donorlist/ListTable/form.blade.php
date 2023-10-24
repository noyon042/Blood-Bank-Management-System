@extends('admin.master')

@section('content')

<h1>Create New Donor List</h1>

<form action="{{route('donorlist.store')}}" method="post">
    @csrf

    <div class="form-group">
    <label for="">Donation ID</label>
    <input type="text" name="donation_id" class="form-control" id=""  placeholder="Donation ID">
  </div>

  <div class="form-group">
    <label for="">Enter Name</label>
    <input name="donor_name" type="text" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Blood Type</label>
    <input type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
  </div>

  <div class="form-group">
    <label for="">Contact </label>
    <input type="number" name="contact" class="form-control" id=""  placeholder="G-mail/Phn No.">
  </div>

  
  <div class="form-group">
    <label for="">Address</label>
    <textarea  class="form-control" name="address" id="" cols="15" rows="5"></textarea>
  </div>


  

  <div class="form-group">
        <label for="dateNeeded">Last Donation Date</label>
        <input type="date" name="last_donation_date" class="form-control" id="dateNeeded" placeholder="Donation Date" required>
      </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
