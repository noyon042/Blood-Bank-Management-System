@extends('frontend.master')


@section('content')
<div class="mx-3 my-3">

<form action="{{route('member.post.store')}}" method="post" enctype="multipart/form-data">
    @csrf

<div class="form-group">
    <label for="name">Name:</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

  </div>

  <div class="form-group">
    <label for="">Select Role:</label>
   <select required class="form-control" name="role" id="">
        <!-- <option value="">Admin</option> -->
        <option value="donation">I want to Donate blood</option>
        <option value="recepient">I have come to received blood</option>
   </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

</div>
{{-- <div class="form-group">
    <label for="">Blood Type</label>
    <input type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
  </div> --}}

  <div class="form-group">
    <label for="">Blood Group:</label>
   <select required class="form-control" name="blood_group" id="">
        <!-- <option value="">Admin</option> -->
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
   </select>
  </div>

  <div class="form-group">
    <label for="">Contact: </label>
    <input type="tel" name="contact" class="form-control" id=""  placeholder="Contact">
  </div>


  <div class="form-group">
    <label for="">Address:</label>
    <textarea  class="form-control" name="address" id="" cols="15" rows="5"></textarea>
  </div>


  <div class="form-group">
    <label for="">Upload Image: </label>
    <input name="image" type="file" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
