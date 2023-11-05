@extends('admin.master')

@section('content')

<h1>Create New Donor List</h1>

<form action="{{route('donorlist.store')}}" method="post">
    @csrf

    <div class="form-group">
    <label for="">Requester Name</label>
    <input type="text" name="donation_id" class="form-control" id=""  placeholder="Donation ID">
  </div>

  <div class="form-group">
    <label for="">Request Date</label>
    <input name="donor_name" type="text" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Donar Name</label>
    <input type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
  </div>

  <div class="form-group">
    <label for="">Admin Response</label>
    <input type="number" name="contact" class="form-control" id=""  placeholder="G-mail/Phn No.">
  </div>


  <div class="form-group">
    <label for="">Hospital</label>
    <textarea  class="form-control" name="address" id="" cols="15" rows="5"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
