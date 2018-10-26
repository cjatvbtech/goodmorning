@extends('layouts.microsite')

@section('content')
<h2>Track your application</h2>

<div class="card">
    <div class="tracking-index clearfix">
        <div class="tracking-form">
            <div class="inner-content text-center">
                <div class="form-group">
                    <label class="control-label" for="tracking_code">Enter tracking code</label>
                    <input type="text" name="tracking_code" class="form-control" placeholder="Type here" />
                </div>
                <p><button type="submit" class="btn btn-primary">PROCEED</button></p>
                <p>
                    Forgot your tracking code? <br/>
                    <a href="#" class="f-18 c-blue f-medium">Send code to registered email</a>
                </p>
            </div>
        </div>

        <div class="tracking-hero-image"></div>

    </div>
</div>

<p class="text-center">
    Have not yet applied for a loan or insurance? <br />
    <a class="c-blue f-16 f-medium" href="#">Apply now</a>
</p>

@endsection