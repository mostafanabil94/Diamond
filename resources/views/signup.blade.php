@extends('layouts.master')

@section('title')
    SignUp
@endsection

@section('content')
    <div class="row">
        <div class=" col-md-offset-2 col-md-8">
            <h3>SignUp</h3>
            <form action="{{ route('user.add') }}" method="post">
                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="email" required>
                </div>
                <div class="form-group">
                    <label for="password1">Password </label>
                    <input type="password" name="password1" class="form-control" id="password1" placeholder="password" required>
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password </label>
                    <input type="password" name="password2" class="form-control" id="password2" placeholder="confirm password" required>
                </div>
                <div class="form-group">
                    <label for="phone1">Phone1 </label>
                    <input type="text" name="phone1" class="form-control" id="phone1" placeholder="phone1" required>
                </div>
                <div class="form-group">
                    <label for="phone2">Phone2 </label>
                    <input type="text" name="phone2" class="form-control" id="phone2" placeholder="phone2">
                </div>
                <div class="form-group">
                    <label for="company_name">Company Name </label>
                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="company name" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
