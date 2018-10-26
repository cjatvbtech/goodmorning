@extends('layouts.microsite')

@section('content')
<h2>Loan &amp; insurance application</h2>
<p class="text-center">Pre process your loan and insurance application online quick and easy</p>
<div class="card">
    <div class="row no-gutters">
        <div class="col-sm-6">
            <div class="frame-responsive frame-responsive-16by9">
                <div class="personal-loan-app"></div>
            </div>
            <div class="inner-content">
                <h2 class="c-blue m-t-0 m-b-10">Sole Proprietor</h2>
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                    <a class="btn btn-round-side btn-yellow w-150px m-b-15" href="{{ route('insurance-index', ['type' => 'proprietor']) }}">INSURANCE</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="frame-responsive frame-responsive-16by9">
                <div class="company-loan-app"></div>
            </div>
            <div class="inner-content">
                <h2 class="c-blue m-t-0 m-b-10">Corporation</h2>
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="text-center">
                    <a class="btn btn-round-side w-150px m-b-15" href="{{ route('loans-index', ['type' => 'corporation']) }}">LOAN</a>
                    <a class="btn btn-round-side btn-yellow w-150px m-b-15" href="{{ route('insurance-index', ['type' => 'corporation']) }}">INSURANCE</a>
                </div>
            </div>
        </div>

    </div>
</div>
<p class="text-center">
    Already have applied for a loan or insurance? <br />
    <a class="c-blue f-16 f-medium d-block" href="{{ route('loans-track') }}">Track your application</a>
</p>
@endsection