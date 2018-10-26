@extends('layouts.microsite')
@section('content')
@if ($type == 'corporation')
<h2>Loan application for a corporation</h2>
@else
<h2>Loan application for a sole proprietor</h2>
@endif
<form method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="card card-rounded">
        <div class="card-header bgm-blue"></div>
        <div class="card-body p-b-0">
            <div class="row">
                <div class="col-sm-4">
                    <div class="frame-responsive frame-responsive-16by9">
                        <img src="{{ asset('storage/products/'.$product->image) }}">
                    </div>
                </div>
                <div class="col-sm-8 p-t-20">
                    <span class="c-blue"><strong>Insurance application for {{ $product->name }}</strong></span>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
            @if ($type == 'corporation')
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
                        <label class="c-black">Name of Business</label>
                        <input class="form-control " name="company_name" value="{{ old('company_name') }}" required>
                        @if ($errors->has('company_name'))
                        <p class="help-block">{{ $errors->first('company_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group {{ $errors->has('company_address') ? 'has-error' : ''  }}">
                        <label class="c-black">Business Address</label>
                        <input class="form-control" name="company_address" value="{{ old('company_address') }}" required>
                        @if ($errors->has('company_address'))
                        <p class="help-block">{{ $errors->first('company_address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('established_date') ? 'has-error' : '' }}">
                        <label class="c-black">Date Established</label>
                        <input type="date" class="form-control" name="established_date" value="{{ old('established_date') }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('company_email') ? 'has-error' : '' }}">
                        <label class="c-black">Business Email</label>
                        <input type="email" class="form-control" name="company_email" required value="{{ old('company_email') }}">
                        @if ($errors->has('company_email'))
                        <p class="help-block">{{ $errors->first('company_email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('company_phone') ? 'has-error' : '' }}">
                        <label class="c-black">Business Phone</label>
                        <input class="form-control" name="company_phone" required value="{{ old('company_phone') }}">
                        @if ($errors->has('company_phone'))
                        <p class="help-block">{{ $errors->first('company_phone') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group {{ $errors->has('company_tin') ? 'has-error' : '' }}">
                        <label class="c-black">Business TIN #</label>
                        <input class="form-control" name="company_tin" required value="{{ old('company_tin') }}">
                        @if ($errors->has('company_tin'))
                        <p class="help-block">{{ $errors->first('company_tin') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                        <label class="c-black">First Name</label>
                        <input class="form-control" name="first_name" required value="{{ old('first_name') }}">
                        @if ($errors->has('first_name'))
                        <p class="help-block">{{ $errors->first('first_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('middle_name') ? 'has-error' : '' }}">
                        <label class="c-black">Middle Name</label>
                        <input class="form-control" name="middle_name" required value="{{ old('middle_name') }}">
                        @if ($errors->has('middle_name'))
                        <p class="help-block">{{ $errors->first('middle_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        <label class="c-black">Last Name</label>
                        <input class="form-control" name="last_name" required value="{{ old('last_name') }}">
                        @if ($errors->has('last_name'))
                        <p class="help-block">{{ $errors->first('last_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group {{ $errors->has('home_address') ? 'has-error' : '' }}">
                        <label class="c-black">Home Address</label>
                        <input type="text" class="form-control" name="home_address" required value="{{ old('home_address') }}">
                        @if ($errors->has('home_address'))
                        <p class="help-block">{{ $errors->first('home_address') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label class="c-black">Email</label>
                        <input class="form-control" name="email" required value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <p class="help-block">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : '' }}">
                        <label class="c-black">Birthdate</label>
                        <input type="date" class="form-control" name="birthdate" requried value="{{ old('birthdate') }}">
                        @if ($errors->has('birthdate'))
                        <p class="help-block">{{ $errors->first('birthdate') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('tin') ? 'has-error' : '' }}">
                        <label class="c-black">TIN #</label>
                        <input type="number" class="form-control" name="tin" required value="{{ old('tin') }}">
                        @if ($errors->has('tin'))
                        <p class="help-block">{{ $errors->first('tin') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('sss') ? 'has-error' : '' }}">
                        <label class="c-black">SSS #</label>
                        <input class="form-control" name="sss" required value="{{ old('sss')}}">
                        @if ($errors->has('sss'))
                        <p class="help-block">{{ $errors->first('sss') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('home_mobile') ? 'has-error' : '' }}">
                        <label class="c-black">Mobile Number</label>
                        <input class="form-control" name="home_mobile" required value="{{ old('home_mobile') }}">
                        @if ($errors->has('home_mobile'))
                        <p class="help-block">{{ $errors->first('home_mobile') }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group {{ $errors->has('home_phone') ? 'has-error' : '' }}">
                        <label class="c-black">Home Phone Number</label>
                        <input class="form-control" name="home_phone" required value="{{ old('home_phone') }}">
                        @if ($errors->has('home_phone'))
                        <p class="help-block">{{ $errors->first('home_phone') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <hr class="m-t-0">
            <div class="row">
                <div class="col-md-12 text-center {{ $errors->has('requirements') ? 'has-error' : '' }}">
                    @if ($errors->has('requirements'))
                    <p class="help-block">{{ $errors->first('requirements') }}</p>
                    @endif
                    <p class="c-black m-b-0"><strong>Upload necessary documents (upload atleast 1)</strong></p>
                    <label class="btn btn-secondary btn-round-side p-r-50 p-l-50">
                        SELECT DOCUMENT TO UPLOAD <input type="file" name="requirements[]" multiple required style="visibility: hidden">
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
@endsection