@extends('layouts.app')
@section('content')
<a href="{{ route('admin-index') }}" class="d-i-block">Dashboard</a> / <a class="d-i-block" href="{{ route('admin-loans-index') }}">Applications</a> / {{ $application->tracking_code }}
<div class="card">
    <div class="card-body p-b-0 p-t-20">
        <h2 class="c-blue m-t-0">Tracking Code: {{ $application->tracking_code }}</h2>
        <h4 class="c-blue m-t-0 m-b-10 text-center">Submitted: {{ date('M d, Y', strtotime($application->created_at)) }}</h4>
        <h4 class="c-blue m-t-0 text-center">Last updated: {{ date('M d, Y', strtotime($application->updated_at)) }}</h4>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="frame-responsive frame-responsive-16by9">
                    <img src="{{ asset('storage/products/'.$application->product->image) }}">
                </div>
            </div>
            <div class="col-sm-8 p-t-20">
                <span class="c-blue"><strong>Loan application for {{ $application->product->name }}</strong></span>
                <p>{{ $application->product->description }}</p>
            </div>
        </div>
        @if ($application->type == 'corporation')
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <p><strong>No. of items:</strong> {{ $application->number_of_items }}</p>
            </div>
        </div>
        <hr/>
        <div class="row">
            <h2>Corporation Information</h2>
            <div class="col-md-12">
                <p class="c-black">Name of Business: {{ $application->company_name }}</p>
            </div>
            <div class="col-md-12">
                <p class="c-black">Business Address: {{ $application->company_address }}</p>
            </div>
            <div class="col-md-6">
                <p class="c-black">Date Established: {{ $application->established_date }}</p>
            </div>
            <div class="col-md-6">
                <p class="c-black">Business Email: {{ $application->company_email }}</p>
            </div>
            <div class="col-md-6">
                <p class="c-black">Business Phone: {{ $application->company_phone }}</p>
            </div>
            <div class="col-md-6">
                    <p class="c-black">Business TIN #: {{ $application->company_tin }}</p>
            </div>
        </div>
        @endif
        <hr>
        <div class="row">
            <h2>Ownership / Officers and Stockholders</h2>
            <div class="col-md-4">
                <p class="c-black">First Name: {{ $application->first_name }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">Middle Name: {{ $application->middle_name }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">Last Name: {{ $application->last_name }}</p>
            </div>
            <div class="col-md-12">
                <p class="c-black">Home Address: {{ $application->home_address }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">Email: {{ $application->email }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">Birthdate: {{ $application->birthdate }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">TIN #: {{ $application->tin }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">SSS #: {{ $application->sss }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">Mobile Number: {{ $application->home_mobile }}</p>
            </div>
            <div class="col-md-4">
                <p class="c-black">Home Phone Number: {{ $application->home_phone }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <h2>Submitted Requirements</h2>
            <ul>
            @foreach ($application->requirements_list as $requirement)
                <li>
                    <a href="{{ asset('storage/loans/'.$requirement) }}" class="d-block" target="_blank">{{ $requirement }} <i class="fa fa-link"></i></a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <a href="{{ route('admin-loans-process', ['tracking_code' => $application->tracking_code, 'status' => 'approved']) }}" class="btn btn-primary"><i class="fa fa-thumbs-up"></i> Approve</a>
    </div>
    <div class="col-md-6">
        <a href="{{ route('admin-loans-process', ['tracking_code' => $application->tracking_code, 'status' => 'denied']) }}" class="btn btn-block btn-red"><i class="fa fa-thumbs-down"></i> Decline</a>
    </div>
</div>
@endsection