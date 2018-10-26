@extends('layouts.microsite')
@section('content')
<h2>Track your application</h2>
<div class="card card-rounded">
    <div class="card-body p-0">
        <div class="col-md-3 b-right" style="min-height: 345px;">
            <form action="{{ route('loans-view') }}">
                <div class="col-md-12 p-t-30">
                    <div class="form-group m-b-10">
                        <label class="control-label">Enter tracking code</label>
                        <input class="form-control" name="tracking_code">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-md">
                            Proceed
                        </button>
                    </div>
                    <p class="text-center">Forgot your tracking code?</p>
                    <h2 class="c-blue text-center"><a href="#">Send code to registered email</a></h2>
                </div>
            </form>
        </div>
        <div class="col-md-9" id="login" style="min-height: 345px; background-size: cover">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <p>Have not yet applied for a loan or insurance?</p>
        <a href="{{ route('home') }}" class="d-block">Apply Now</a>
    </div>
</div>
@endsection