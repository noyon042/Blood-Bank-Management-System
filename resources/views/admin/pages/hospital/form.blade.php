@extends('admin.master')

@section('content')

<h1>Create Hospital INFO</h1>

<form action="{{route('hospital.store')}}" method="post">
    @csrf



  <div class="form-group">
    <label for="">Enter Hospital Name</label>
    <input name="hospital_name" type="text" class="form-control" id=""  placeholder="Enter Hospital name">
  </div>
  <div class="form-group">
    <label for="">Enter Hospital Location</label>
    <input name="location" type="text" class="form-control" id=""  placeholder="Enter Hospital Location">
  </div>
  <div class="form-group">
    <label for="">Available Blood Group</label>
    <input type="text" name="available_blood" class="form-control" id=""  placeholder="Available Blood Group">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
