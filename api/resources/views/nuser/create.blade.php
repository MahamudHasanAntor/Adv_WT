@extends('nuser.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New User</h2>
        </div>
        <br>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('nuser') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('nuser.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="txtFirstName">First Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="5" placeholder="Enter Address"></textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone">
        </div>
        <div class="form-group">
            <label for="carid">Car Number:</label>
            <input type="text" class="form-control" id="carid" placeholder="Enter your car number" name="carid">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="" name="date">
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" placeholder="" name="time">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection