
@extends('frontend.master')
@section('content')


          <div>
                <table class="table ml-4 border" style="width: 750px"  >
                    <thead>
                        <h1 style="text-align: left">Request From Receiver:</h1>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Request Date</th>
                            <th scope="col">Recepient Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($requestAccept as $accept)
                            <tr>
                                <th scope="row">{{ $accept->id }}</th>
                                <td>{{ $accept->created_at }}</td>
                                <td>{{ $accept->user->name}}</td>
                                <td>{{ $accept->status }}</td>
                                <td>
                                    @if ($accept->status == 'pending')
                                        <a class="btn btn-danger" href="{{ route('request.accept', $accept->id) }}">Accept Request
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
@endsection
