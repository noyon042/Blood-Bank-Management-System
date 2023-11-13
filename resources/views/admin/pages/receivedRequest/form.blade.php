@extends('admin.master')

@section('content')

<h1>Request Form</h1>

<form action="{{route('request.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Requester Name</label>
        <select required class="form-control" name="recepient_id" placeholder="Requester Name" id="">

            @foreach ($recepientlists as $recepientlist)

            <option value="{{$recepientlist->id}}">{{$recepientlist->name}}</option>
            @endforeach
        </select>
    </div>

    {{-- <div class="form-group">
        <label for="">Request Date</label>
        <select required class="form-control" name="recepient_id" placeholder="Request Date" id="">
            @foreach ($recepientlists as $recepientlist)
            <option value="{{$recepientlist->recepient_id}}">{{$recepientlist->date_of_need}}</option>
            @endforeach
        </select>
    </div> --}}

    <div class="form-group">
        <label for="">Donar Name</label>
        <select required class="form-control" name="donor_id" placeholder="Donar Name" id="">
            @foreach ($donorlists as $donorlist)
            <option value="{{$donorlist->id}}">{{$donorlist->donor_name}}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group">
        <label for="">Admin Response</label>
        <input type="text" name="response" class="form-control" id="" placeholder="Admin Response">
    </div>


    <div class="form-group">
        <label for="">Hospital</label>
        <select required class="form-control" name="hospital_name" placeholder="Hospital" id="">

            @foreach ($recepientlists as $recepientlist)

            <option value="{{$recepientlist->id}}">{{$recepientlist->hospital_name}}</option>
            @endforeach
        </select>
    </div>

    {{-- <div class="form-group">
        <label for="">Hospital</label>
        <input type="text" name="hospital" class="form-control" id="" placeholder="Hospital">
    </div> --}}


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
