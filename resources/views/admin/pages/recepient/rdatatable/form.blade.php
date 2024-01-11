@extends('admin.master')
@section('content')
<h1>Create Recepient Form</h1>


<form action="{{route('recepient.store')}}" method="post">
    @csrf


    <div class="form-group">
        <label for="name">Name:</label>
        <input required name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

      </div>

      <div class="form-group">
        <label for="">Select Role:</label>
       <select required class="form-control" name="role" id="">
            <!-- <option value="">Admin</option> -->
            <option value="recepient">I have come to received blood</option>
       </select>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address:</label>
        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

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
        <input required type="number" name="contact" class="form-control" id=""  placeholder="Contact">
      </div>


      <div class="form-group">
        <label for="">Hospital Name/Address:</label>
        <input type="text"  class="form-control" name="address" id="" placeholder="Hospital Name/Address" >
      </div>



      <div class="form-group">
        <label for="">Donation Date/ Required Date:</label>
        <input required type="date" name="date" class="form-control" id="dateNeeded" placeholder="Donation Date/ Required Date">
      </div>

      <div class="form-group">
        <label for="">Upload Image: </label>
        <input name="image" type="file" accept="image/*" class="form-control">
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
