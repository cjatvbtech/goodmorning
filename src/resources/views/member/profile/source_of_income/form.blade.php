@extends('layouts.app')
@section('content')
    <style>
        .profile-pic {
            margin-top: 20px;
        }

        label {
            font-weight: bolder;
        }
    </style>

    <div class="row">

        @include('partials.member_left_nav')

        <div class="col-sm-9">

            @if (session('message'))
                <div class="alert alert-success">
                    <i class="glyphicon glyphicon-ok"></i>
                    {{ session('message') }}
                </div>
            @endif


            {!! Form::open(['url' => route('source-of-income-store')]) !!}

            {{csrf_field()}}

            <div class="form-group">
                <label for="client_name">Other Source of Income</label>
                {{  Form::text('source', null,['class'=>'form-control','required'=>'required'])}}
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <i class="glyphicon glyphicon-floppy-disk"></i>
                    Save
                </button>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
