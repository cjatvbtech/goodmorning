@extends('layouts.microsite')
@section('content')

    <div class="inner-wrap">
        @include('partials.member_left_nav')

        <div class="card card-rounded">
            <div class="card-header bgm-blue">
                <h3>Please provide your other sources of income information.</h3>
            </div>

            <div class="card-body p-t-20">

                <a href="{{route('source-of-income-create')}}"><i class="fa fa-edit" aria-hidden="true"></i> Add
                </a>
                <br>
                <br>

                @component('components.source_income',['sourcesOfIncome'=>$sourcesOfIncome])@endcomponent

            </div>
        </div>
    </div>
@endsection
