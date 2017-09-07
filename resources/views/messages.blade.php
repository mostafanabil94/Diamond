@extends('layouts.master')

@section('title')
    Messages
@endsection

@section('content')
    <a href="{{ route('message.new') }}" class="btn btn-lg btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> New Message</a>
    <br><br>
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="{{ route('inbox') }}"><i class="fa fa-inbox" aria-hidden="true"></i> Inbox</a></li>
        <li role="presentation"><a href="{{ route('outbox') }}"><i class="fa fa-send" aria-hidden="true"></i> Outbox</a></li>
    </ul>
    <div class="list-group">
        @foreach($messages as $message)
            <br>
            <a href="{{ route('message.view', ['message_id' => $message->id]) }}" class="list-group-item">
                <h4 class="list-group-item-heading">Subject: {{ $message->subject }}</h4>
                <p class="list-group-item-text">{{ $message->body }}</p>
            </a>
            <br>
        @endforeach
    </div>
@endsection