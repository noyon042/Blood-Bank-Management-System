@extends('admin.master')

@section('content')

<h1>Manage Blood </h1>

<form action="{{route('manageblood.store')}}" method="post">
    @csrf

    <div class="form-group">
    <label for="">Blood Group</label>
    <input type="" name="blood_id" class="form-control" id=""  placeholder="Blood Group">
    @error('blood_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>

  <div class="form-group">
    <label for="">Select Donor Name</label>
    <select required class="form-control"type="name" name="donor_name" id="">

        @foreach ( $donorlists as $donorlist)
        <option value="{{$donorlist->donor_name}}">{{$donorlist->donor_name}}</option>

        @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Donor Contact </label>
    <select required class="form-control"type="text" name="contact" id="">
    @error('contact')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @foreach ( $donorlists as $donorlist)
    <option value="{{$donorlist->contact}}">{{$donorlist->contact}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Recepient Name</label>
    <select required class="form-control"type="text" name="name" id="">
    @foreach ( $recepientlists as $recepientlist)
    <option value="{{$recepientlist->name}}">{{$recepientlist->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Patient Hospital</label>
    <select required class="form-control"type="text" name="hospital_name" id="">
    @foreach ( $recepientlists as $recepientlist)
    <option value="{{$recepientlist->hospital_name}}">{{$recepientlist->hospital_name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Date Of Blood Needed</label>
    <select required class="form-control" type="date" name="date" value="date" id="">
    @foreach ( $recepientlists as $recepientlist)
    <option value="{{$recepientlist->date_of_need}}">{{$recepientlist->date_of_need}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">New Location:</label>
    <input name="location" type="text" class="form-control" id=""  placeholder="New Location">
  </div>
  {{-- <div class="form-group">
    <label for="">New Expiry Date:</label>
    <input type="date" name="expiry_date" class="form-control" id=""  placeholder="New Expiry Date">
  </div> --}}

  <div class="form-group">
    <label for="">Reason for Management: </label>
    <input type="text" name="reason" class="form-control" id=""  placeholder="Reason for Management">
  </div>

  <input type="submit"  value="Submit" class="btn btn-primary">
</form>

  @endsection
