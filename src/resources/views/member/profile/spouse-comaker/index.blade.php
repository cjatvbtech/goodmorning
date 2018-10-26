@extends('layouts.microsite')
@section('content')
    <div class="inner-wrap">
        @include('partials.member_left_nav')
        <div class="card card-rounded">
            <div class="card-header bgm-blue">
                <h3>Spouse or Co-Maker Information</h3>
            </div>

            <div class="card-body p-t-10">
                <div class="inner-content text-right">
                    <a href="{{route('spouse-comaker-edit')}}"><i class="fa fa-edit" aria-hidden="true"></i> Edit </a>
                </div>

                @component('components.comaker_info',['client'=>$user])@endcomponent

            </div>

        </div>
    </div>
@endsection
