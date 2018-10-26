@extends('layouts.microsite')
@section('content')
    
@include('partials.member_left_nav')

<div class="card card-rounded">
    <div class="card-header bgm-blue">
    </div>
    
    <div class="card-body p-t-20">

        {{--<div class="row">--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">Personal Information</div>--}}
        {{--<div class="panel-body">--}}
        {{--<div class="progress-bar1"--}}
        {{--data-percent="20"--}}
        {{--data-duration="1000"--}}
        {{--data-color="#ccc,yellow">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">References</div>--}}
        {{--<div class="panel-body">--}}
        {{--<div class="progress-bar1"--}}
        {{--data-percent="00"--}}
        {{--data-duration="1000"--}}
        {{--data-color="#ccc,yellow">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-4">--}}
        {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">Requirements</div>--}}
        {{--<div class="panel-body">--}}
        {{--<div class="progress-bar1"--}}
        {{--data-percent='00'--}}
        {{--data-duration="1000"--}}
        {{--data-color="#ccc,yellow">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        @if($profileStatus->isCompleted())
            <div class="alert alert-warning">
                <p>
                    <i class="fa fa-check"></i>
                    You have completed your profile, you may now avail of our loan and insurance services.
                </p>
            </div>
        @else
            <div class="alert alert-danger">
                <p>
                    <i class="fa fa-warning"></i>
                    Please Complete your profile to be able to apply for a loan or insurance.
                </p>
            </div>
        @endif

        <table class="table table-bordered" id="info-status">
            <thead>
            </thead>
            <tbody>
            <tr>
                <td>Personal Information</td>
                <td>
                    <div class="progress-bar1"
                         data-percent={{$profileStatus->personal_information ? 100 : "00"}}
                         data-duration="1000"
                         data-color="#ccc,yellow">
                    </div>
                </td>
                <td>{!! $profileStatus->getPersonalInformation() !!}</td>
            </tr>
            <tr>
                <td>Spouse or Co-Maker</td>
                <td>
                    <div class="progress-bar1"
                         data-percent={{$profileStatus->comaker_information ? 100 : "00"}}
                         data-duration="1000"
                         data-color="#ccc,yellow">
                    </div>
                </td>
                <td>{!! $profileStatus->getComakerInformation() !!}</td>
            </tr>
            {{--<tr>--}}
            {{--<td>Other sources of Income</td>--}}
            {{--<td>--}}
            {{--<div class="progress-bar1"--}}
            {{--data-percent='00'--}}
            {{--data-duration="1000"--}}
            {{--data-color="#ccc,yellow">--}}
            {{--</div>--}}
            {{--</td>--}}
            {{--<td>{!! $profileStatus->getSourceOfIncomeInformation() !!}</td>--}}
            {{--</tr>--}}
            <tr>
                <td>Bank Accounts</td>
                <td>
                    <div class="progress-bar1"
                         data-percent={{$profileStatus->bank_accounts ? 100 : "00"}}
                         data-duration="1000"
                         data-color="#ccc,yellow">
                    </div>
                </td>
                <td>{!! $profileStatus->getBankAccountsInformation() !!}</td>
            </tr>
            <tr>
                <td>Trade References</td>
                <td>
                    <div class="progress-bar1"
                         data-percent={{$profileStatus->trade_references ? 100 : "00"}}
                         data-duration="1000"
                         data-color="#ccc,yellow">
                    </div>
                </td>
                <td>{!! $profileStatus->getTradeReferences()!!}</td>
            </tr>
            <tr>
                <td>Uploaded Requirements</td>
                <td>
                    <div class="progress-bar1"
                         data-percent={{$profileStatus->uploaded_requirements ? 100 : "00"}}
                         data-duration="1000"
                         data-color="#ccc,yellow">
                    </div>
                </td>
                <td>{!!$profileStatus->getUploadedRequirements()!!}</td>
            </tr>

            <tr>
                <td colspan="3">
                    @if($profileStatus->isCompleted())
                        <a href="{{route('loan')}}" class="btn btn-primary">
                            Apply For Loan
                        </a>
                    @else
                        <a href="" class="btn btn-disabled">
                            Apply For Loan
                        </a>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection
@section('otherJSLibrary')
    <script type="text/javascript" src="/js/jQuery-plugin-progressbar.js"></script>
    <script>
        $(document).ready(function () {
            $(".progress-bar1").loading();
        });

    </script>
@endsection