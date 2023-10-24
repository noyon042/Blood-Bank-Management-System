@extends('admin.master')
@section('content')


<div class="container mt-5">
    <form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="bloodType">Blood Type</label>
        <input type="text" class="form-control" id="bloodType" placeholder="Enter your blood type" required>
      </div>
      <div class="form-group">
        <label for="phoneNumber">Phone Number</label>
        <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="hospitalName">Hospital Name</label>
        <input type="text" class="form-control" id="hospitalName" placeholder="Enter the hospital name" required>
      </div>
      <div class="form-group">
        <label for="dateNeeded">Date of Blood Needed</label>
        <input type="date" class="form-control" id="dateNeeded" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  @endsection