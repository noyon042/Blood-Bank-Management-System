@extends('admin.master')

@section('content')


<h2>Add Blood</h2>

<form action="" method="post">
    @csrf

    <div class="form-group">
    <label for="">Donor Name</label>
    <input type="text" name="donor_name" class="form-control" id=""  placeholder="Donor Name">
  </div>
  <div class="form-group">
    <label for="">Blood Group:</label> <br>
    <select class="form-control"  name="blood_group">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
  </div>

  <div class="form-group">
    <label for="">Donation Date: </label>
    <input type="date" name="donation_date" class="form-control" id=""  placeholder="Donation Date">
  </div>

  



  

  <div class="form-group">
        <label for="dateNeeded">Expiry Date:</label>
        <input type="date" name="expiry_date" class="form-control" id="dateNeeded" placeholder="Expiry Date" required>
      </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection