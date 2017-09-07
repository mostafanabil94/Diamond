@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <h1><i class="fa fa-home" aria-hidden="true"></i> Dashboard</h1>

    <row>
        <div class="col-offset-md-2 col-md-4">
            <h3>SignUp new User</h3>
            <form action="{{ route('signup') }}" method="get">
                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-md-4">
            <h3>Add a Service to User</h3>
            <form action="{{ route('service') }}" method="get">
                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Service</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

        <div class="col-md-4">
            <h3>Edit a Service</h3>
            <form action="{{ route('services') }}" method="get">
                <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Edit Service</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

    </row>
@endsection
