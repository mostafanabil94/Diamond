@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <div class="col-md-5 col-md-offset-4">
        <h1 style="padding-top: 80px; padding-bottom: 40px; font-size: 72px; font-family: 'Lato'"><i class="fa fa-diamond" aria-hidden="true"></i> Diamond</h1>
        <h3>SignIn</h3>
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group">
                <label for="email">E-mail </label>
                <input type="text" name="email" class="form-control" id="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password </label>
                <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
            </div>

            <button class="btn btn-primary" style="margin-left: 100px; margin-top: 50px"><i class="fa fa-sign-in" aria-hidden="true"></i> SignIn</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
@endsection
