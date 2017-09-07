@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
    <form action="{{ route('services.edit') }}" method="post">
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
        <button type="submit" class="btn btn-lg btn-primary">Go to User Services</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
@endsection
