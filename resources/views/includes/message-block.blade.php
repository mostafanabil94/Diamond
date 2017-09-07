@if(Session::has('success'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
@if(Session::has('failure'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
            {{ Session::get('failure') }}
        </div>
    </div>
@endif