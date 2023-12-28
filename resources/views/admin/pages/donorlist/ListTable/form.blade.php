@extends('admin.master')

@section('content')

<h1>Create New Donor List</h1>

<form action="{{route('donorlist.store')}}" method="post" enctype="multipart/form-data">
    @csrf



  <div class="form-group">
    <label for="">Enter Name</label>
    <input name="name" type="text" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Enter Email</label>
    <input name="email" type="text" class="form-control" id=""  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Blood Group</label>
    <input type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
  </div>

  <div class="form-group">
    <label for="">Contact </label>
    <input type="number" name="contact" class="form-control" id=""  placeholder="Contact">
  </div>


  <div class="form-group">
    <label for="">Hospital Name/Address</label>
    <textarea  class="form-control" name="address" id="" cols="15" rows="5"></textarea>
  </div>




  <div class="form-group">
        <label for="dateNeeded">Last Donation Date</label>
        <input type="date" name="date" class="form-control" id="dateNeeded" placeholder="Donation Date" required>
      </div>

      <div class="form-group">
        <label for="">Upload Image: </label>
        <input name="image" type="file" class="form-control">
      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
