@extends('frontend.master')

@section('content')
<div style=" margin:auto;width:43% ">
<h1>Update Your Post</h1>

<form action="{{route('myPost.update',$editPost->id)}}" method="post" enctype="multipart/form-data">
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
    <input value="{{$editPost->name}}" required name="name" type="text" class="form-control" id=""  placeholder="Enter name">
    @error('donor_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>


  <div class="form-group">
    <label for="">Enter Email</label>
    <input value="{{$editPost->email}}" name="email" type="text" class="form-control" id=""  placeholder="Enter email">
  </div>
  {{-- <div class="form-group">
    <label for="exampleInputPassword1">Update Password</label>
    <input value="{{$editPost->password}}" name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div> --}}

  <div class="form-group">
    <label for="">Blood Type</label>
    <input value="{{$editPost->blood_group}}" type="text" name="blood_group" class="form-control" id=""  placeholder="Blood Type">
  </div>

  <div class="form-group">
    <label for="">Contact </label>
    <input value="{{$editPost->contact}}" type="text" name="contact" class="form-control" id=""  placeholder="Contact">
  </div>


  <div class="form-group">
    <label for="">Address</label>
    <input value="{{$editPost->address}}" type="text" name="address" class="form-control" id=""  placeholder="Address">
  </div>




  <div class="form-group">
        <label for="dateNeeded">Last Donation Date</label>
        <input value="{{$editPost->date}}" type="date" name="date" class="form-control" id="dateNeeded" placeholder="Donation Date" required>
      </div>

      <div class="form-group">
        <label for="">Upload Image: </label>
        <input value="{{$editPost->image}}" name="image" type="file" class="form-control">
      </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
