@extends('frontend.master')


@section('content')
<div style=" margin:auto;width:43% ">
    <div style="    text-align: center;
    font-weight: bold;margin:15px"><u>Register For New As A Member:</u></div>
<form  action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address:</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password:</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    {{-- <div class="form-group">
        <label for="">Select Role:</label>
        <select required class="form-control" name="role" id="">
            <!-- <option value="">Admin</option> -->
            <option value="donation">I want to Donate blood</option>
            <option value="recepient">I have come to received blood</option>
        </select>
    </div> --}}

    <div class="form-group">
        <label for="">Select Role:</label>
        <select required class="form-control" name="role" id="">
            <option value="member">Register As Member</option>

            {{-- <option value="donation">I want to Donate blood</option>
            <option value="recepient">I have come to received blood</option> --}}
        </select>
    </div>

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
        <input name="contact" type="tel" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Address: </label>
        <input name="address" type="text" placeholder="Hospital Name/Address" class="form-control">
    </div>

    {{-- <div class="form-group">
        <label for="">Date: </label>
        <input name="date" type="date" class="form-control">
    </div> --}}

    <div class="form-group">
        <label for="">Upload Image: </label>
        <input name="user_image" type="file" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
