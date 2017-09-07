@extends('layouts.master')

@section('title')
    New Message
@endsection

@section('content')
    <div class="row">
        <div class=" col-md-offset-2 col-md-8">
            <h3>Message</h3>
            <br><br>
            <h3 class="list-group-item-heading">From: {{ $from }}</h3>
            <h3 class="list-group-item-heading">To: {{ $to }}</h3>
            <h4 class="list-group-item-heading">Subject: {{ $message->subject }}</h4>
            <br>
            <p class="list-group-item-text">{{ $message->body }}</p>
            <br><br>
            <a href="{{ route('inbox') }}" class="btn btn-sm btn-danger pull-right"> Back To Messages </a>
        </div>
    </div>
@endsection