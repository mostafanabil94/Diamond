@extends('layouts.master')

@section('title')
    Add Service
@endsection

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h3>Edit a User Service</h3>
        <form action="{{ route('service.post.edit') }}" method="post">
            <input type="hidden" class="form-control" name="service_id" id="service_id" value="{{ $service->id }}">
            <div class="form-group">
                <label class="form-control-label" for="service_name">Service Name</label>
                <input type="text" class="form-control" name="service_name" id="service_name" value="{{ $service->name }}" placeholder="{{ $service->name }}">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="start_date">Start Date</label>
                <input type="text" class="form-control"  name="start_date" id="start_date" value="{{ $service->startDate }}" placeholder="{{ $service->startDate }}">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="end_date">End Date</label>
                <input type="text" class="form-control" name="end_date" id="end_date"  value="{{ $service->endDate }}" placeholder="{{ $service->endDate }}">
            </div>
            <div class="form-group">
                <label for="description">Service Description</label>
                <input type="text" class="form-control"  name="description" id="description" placeholder="{{ $service->description }}">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="message_number">Messsage Number</label>
                <input type="text" class="form-control" name="message_number" id="message_number" value="{{ $service->numberOfMessages }}" placeholder="{{ $service->numberOfMessages }}">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="price">Price</label>
                <input type="text" class="form-control"  name="price" id="price" value="{{ $service->price }}" placeholder="{{ $service->price }}">
            </div><div class="form-group">
                <label class="form-control-label" for="used">Used</label>
                <input type="text" class="form-control"  name="used" id="used" value="{{ $service->used }}" placeholder="{{ $service->used }}">
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection