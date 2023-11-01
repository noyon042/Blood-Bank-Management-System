@extends('admin.master')

@section('content')

<h1>Create New Donor List</h1>

<form action="{{route('manageblood.store')}}" method="post">
    @csrf

    <div class="form-group">
    <label for="">Blood ID</label>
    <input type="text" name="blood_id" class="form-control" id=""  placeholder="Blood ID">
  </div>

  <div class="form-group">
    <label for="">New Location:</label>
    <input name="location" type="text" class="form-control" id=""  placeholder="New Location">
  </div>
  <div class="form-group">
    <label for="">New Expiry Date:</label>
    <input type="date" name="expiry_date" class="form-control" id=""  placeholder="New Expiry Date">
  </div>

  <div class="form-group">
    <label for="">Reason for Management: </label>
    <input type="text" name="reason" class="form-control" id=""  placeholder="Reason for Management">
  </div>
</form>

  @endsection
