@extends('admin.master')

@section('content')

<h1>Create New recepient List</h1>

<form action="{{route('donor.update',$recepient->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    {{-- <div class="form-group">
        <label for="">Enter Product Name:</label>
        <input value="{{$product->name}}" required type="text" class="form-control" id="" placeholder="Enter name" name="product_name">
        @error('product_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

  <div class="form-group">
    <label for="">Enter Name</label>
    <input value="{{$recepient->name}}" required name="name" type="text" class="form-control" id=""  placeholder="Enter name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>


  <div class="form-group">
    <label for="">Enter Email</label>
    <input value="{{$recepient->email}}" name="email" type="text" class="form-control" id=""  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Blood Group</label>
    <input value="{{$recepient->blood_group}}" type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
  </div>

  <div class="form-group">
    <label for="">Contact </label>
    <input value="{{$recepient->contact}}" type="text" name="contact" class="form-control" id=""  placeholder="Contact">
  </div>


  <div class="form-group">
    <label for="">Address</label>
    <input value="{{$recepient->address}}" type="text" name="address" class="form-control" id=""  placeholder="Address">
  </div>




  <div class="form-group">
        <label for="dateNeeded">Last Donation Date</label>
        <input value="{{$recepient->date}}" type="date" name="date" class="form-control" id="dateNeeded" placeholder="Donation Date" required>
      </div>

      <div class="form-group">
        <label for="">Upload Image: </label>
        <input value="{{$recepient->image}}" name="image" type="file" class="form-control">
      </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
