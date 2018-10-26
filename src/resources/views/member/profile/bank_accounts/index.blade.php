@extends('layouts.microsite')
@section('content')

    <div class="inner-wrap">
        @include('partials.member_left_nav')
        <div class="card card-rounded">
            <div class="card-header bgm-blue">
                <h2>Please provide your bank accounts information.</h2>
            </div>

            <div class="card-body p-t-20">
                <div class="text-right">
                    <a href="{{route('bank-accounts-create')}}">
                        <i class="fa fa-edit" aria-hidden="true"></i> Add
                    </a>
                </div>

                @component('components.bank_accounts',['accounts'=>$user->profile->bankAccounts])@endcomponent

            </div>

        </div>
    </div>

@endsection
