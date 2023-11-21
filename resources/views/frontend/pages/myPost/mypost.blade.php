

@extends('frontend.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            text-align: center;
            margin-top: 20px;
        }

        .user-info h2 {
            margin: 0;
            color: #333;
        }

        .user-info p {
            color: #666;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <div class="profile-picture">
        {{-- <img src="{{url('/uploads/'.$myPost->image)}}" alt="Profile Picture"> --}}
    </div>
    <div class="user-info">
        {{-- <h2>Name: {{$myPost->name}}</h2> --}}


    {{-- <a href="#" class="btn btn-outline-success btn-sm">Donate Now</a>mypost --}}



{{--
        <p>ID: {{$myPost->id}}</p>
        <p>Role: {{$myPost->role}}</p>
        <p>Email: {{$myPost->email}}</p>
        <p>Blood Group: {{$myPost->blood_group}}</p>
        <p>Contact: {{$myPost->contact}}</p>myPost
        <p>Address: {{$myPost->address}}</p>
        <p>Image: {{$myPost->image}}</p>
        <p>Last Donation Date: {{$myPost->date}}</p> --}}
    </div>
</div>

</body>
</html>
@endsection
