@extends('nuser.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Users Information</h2>
        </div>
        <br>
        <div class="col-lg-1">
        <a class="btn btn-primary" href="{{ url('dashboard') }}"> Back</a><br><br>
            
        </div>
        <div class="col-lg-2">
            
        <a class="btn btn-success" href="{{ route('nuser.create') }}">Add</a>
        </div>
       
    </div> <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Car Number</th>
            <th>Date</th>
            <th>Time</th>

            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($nusers as $nuser)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $nuser->first_name }} {{ $nuser->last_name }}</td>
                <td>{{ $nuser->carid }}</td>
                <td>{{ $nuser->date }}</td>
                <td>{{ $nuser->time }}</td>
                <td>
                    <form action="{{ route('nuser.destroy',$nuser->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('nuser.show',$nuser->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('nuser.edit',$nuser->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection