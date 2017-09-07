@extends('layouts.master')

@section('title')
    Add Service
@endsection

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h3>Add a new Service to Account</h3>
        <form action="{{ route('service.add') }}" method="post">
            <div class="form-group">
                <label class="form-control-label" for="user_name">Users' Name</label>
                <select name="user_id" required>
                    @foreach($users as $user)
                        @if($user->role == 'user')
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="service_name">Service Name</label>
                <input type="text" class="form-control" name="service_name" id="service_name" placeholder="Service Name" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="start_date">Start Date</label>
                <input type="text" class="form-control"  name="start_date" id="start_date" placeholder="Start Date" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="end_date">End Date</label>
                <input type="text" class="form-control" name="end_date" id="end_date" placeholder="End Date" required>
            </div>
            <div class="form-group">
                <label for="description">Service Description</label>
                <textarea class="form-control"  name="description" id="description" placeholder="Service Description for Customer" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="message_number">Messsage Number</label>
                <input type="text" class="form-control" name="message_number" id="message_number" placeholder="Messsage Number" required>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="price">Price</label>
                <input type="text" class="form-control"  name="price" id="price" placeholder="Price" required>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection