@extends('layouts.microsite')
@section('content')
@if (session('loan_saved'))
<div class="row">
    <h2 class="c-blue">Loan application successfully submitted</h2>
    <p class="text-center">
        Our agents will get in touch with you shortly. <br>
        Below is a code for you to track your loan application
    </p>
</div>
<div class="row">
    <h1 class="c-blue text-center">{{ $loan->tracking_code }}</h1>
</div>
@endif


@if (session('loan_saved'))
<a class="btn btn-secondary" href="{{ route('home') }}">DONE</a>
@elseif ($loan)
<div class="row">
    <h1 class="c-blue text-center">{{ $loan->tracking_code }}</h1>
</div>
<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card card-rounded">
        <div class="card-header bgm-blue"></div>
        <div class="card-body p-b-0">
            <h2 class="c-blue">{{ $loan->statusMessage }}</h2>
            <hr class="m-t-0">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="c-black m-b-0"><strong>Upload necessary documents (upload atleast 1)</strong></p>
                    <label class="btn btn-secondary btn-round-side p-r-50 p-l-50">
                        SELECT DOCUMENT TO UPLOAD <input type="file" hidden name="requirements[]" multiple required style="visibility: hidden">
                    </label>
                    <ul class="m-t-20 p-0 list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-secondary" type="submit">SUBMIT</button>
        </div>
    </div>
</form>
@else
<div class="card card-rounded">
    <div class="card-header bgm-blue"></div>
    <div class="card-body p-b-0 text-center">
        <h2 class="c-blue">No application found</h2>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Have not yet applied for a loan or insurance?</p>
                <a href="{{ route('home') }}" class="d-block">Apply Now</a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection