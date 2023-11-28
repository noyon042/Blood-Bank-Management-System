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
                    <img src="{{ url('/uploads/' . auth()->user()->image) }}" alt="Profile Picture">
                </div>
                <div class="user-info">
                    <h2>Name: {{ auth()->user()->name }}</h2>
                    <hr>
                    <p>ID: {{ auth()->user()->id }}</p>
                    <hr>
                    <p>Role: {{ auth()->user()->role }}</p>
                    <hr>
                    <p>Blood Group: {{ auth()->user()->blood_group }}</p>
                    <hr>
                    <p>Contact: {{ auth()->user()->contact }}</p>
                    <hr>
                    <p>Address: {{ auth()->user()->address }}</p>
                    <hr>
                    <p>Date: {{ auth()->user()->date }}</p>
                    <hr>
                    <p>Image: {{ auth()->user()->image }}</p>
                    <hr>
                    <p>Email: {{ auth()->user()->email }}</p>
                    <hr>
                    <a class="btn btn-success" href="{{ route('profile.edit', auth()->user()->id) }}">Edit Profile</a>
                    <hr>
                </div>
            </div>

            <hr>
            <table class="table">
                <thead>
                    <h1 style="text-align: center">All Apply For Donar:</h1>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($applies as $apply)
                        <tr>
                            <th scope="row">{{ $apply->id }}</th>
                            <td>{{ $apply->created_at }}</td>
                            <td>{{ $apply->memberPost->name}}</td>
                            <td>{{ $apply->status }}</td>
                            <td>
                                @if ($apply->status == 'pending')
                                    <a class="btn btn-danger" href="{{ route('apply.cancel', $apply->id) }}">Cancel
                                        Apply</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
            </table>
        </body>
    </html>
@endsection
