@extends('layouts.master')

@section('title')
    New Message
@endsection

@section('content')
    <div class="row">
        <div class=" col-md-offset-2 col-md-8">
            @include('includes.message-block')
            <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> New Message</h3>
            <form action="{{ route('message.send') }}" method="post">
                <input type="hidden" name="from" class="form-control" id="from" value="{{ $from->id }}" required>
                <div class="form-group">
                    <label for="to">To </label>
                    <select name="to" required>
                        @foreach($to as $user)
                            @if($from->role == 'user' && $user->role == 'admin')
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                            @if($from->role == 'admin' && $user->role == 'user')
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="subject">Subject </label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <label for="body">Message Body </label>
                    <textarea type="text" name="body" class="form-control" id="body" placeholder="Message Body" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection