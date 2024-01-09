@extends('frontend.master')


@section('content')

<div class="card shadow mt-4 mb-4 px-3 py-5 " style=" margin:auto;width:35% ">
    <h2 class="card-title text-center mb-3">Login</h2>

<form action="{{route('member.do.login')}}" method="post">
    @csrf


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>


  <button type="submit" class="btn bg-success text-white btn-block">Login</button>
</form>
</div>
@endsection
