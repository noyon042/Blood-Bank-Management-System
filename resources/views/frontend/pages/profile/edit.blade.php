@extends('frontend.master')

@section('content')
<div class="card p-4 mt-5 mb-4" style="margin: auto;width:43%">
<h1>Update Profile</h1>

<form action="{{route('profile.update',$editprofile->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    {{-- <div class="form-group">
        <label for="">Enter Product Name:</label>
        <input value="{{$product->name}}" required type="text" class="form-control" id="" placeholder="Enter name" name="product_name">
        @error('product_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

  <div class="form-group">
    <label for="">Name</label>
    <input value="{{$editprofile->name}}" required name="name" type="text" class="form-control" id=""  placeholder="Enter name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>


  <div class="form-group">
    <label for="">Email Address</label>
    <input value="{{$editprofile->email}}" name="email" type="text" class="form-control" id=""  placeholder="Enter email">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Update Password</label>
    <input value="{{$editprofile->password}}" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>



  <div class="form-group">
    <label for="">Blood Group</label>
    <select input value="{{$editprofile->blood_group}}" type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
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
    <label for="">Contact </label>
    <input value="{{$editprofile->contact}}" type="number" name="contact" class="form-control" id=""  placeholder="Contact">
  </div>


  <div class="form-group">
    <label for="">Hospital Name/Address</label>
    <input value="{{$editprofile->address}}" type="text" name="address" class="form-control" id=""  placeholder="Hospital Name/Address">
  </div>




  <div class="form-group">
        <label for="dateNeeded">Date</label>
        <input value="{{$editprofile->date}}" type="date" name="date" class="form-control" id="dateNeeded" placeholder="Donation Date" required>
      </div>

      <div class="form-group">
        <label for="">Upload Image: </label>
        <input value="{{$editprofile->image}}" name="image" type="file" accept="image/*" class="form-control">
      </div>


  <button type="submit" class="btn bg-success text-white">Submit</button>
</form>
</div>
@endsection
