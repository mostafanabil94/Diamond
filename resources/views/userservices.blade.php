@extends('layouts.master')

@section('title')
    User Services
@endsection

@section('content')
    <table class="table table-inverse">
        <thead>
        <tr>
            <th>Service Id</th>
            <th>Service Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Number of Messages</th>
            <th>Price</th>
            <th>Used</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->name}}</td>
                <td>{{$service->description}}</td>
                <td>{{$service->startDate}}</td>
                <td>{{$service->endDate}}</td>
                <td>{{$service->numberOfMessages}}</td>
                <td>{{$service->price}}</td>
                <td>{{$service->used}}</td>
                <td><a href="{{ route('service.edit', ['id' => $service->id]) }}" class="btn btn-xs btn-success">Edit</a></td>
                <td><a href="{{ route('service.delete', ['id' => $service->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

