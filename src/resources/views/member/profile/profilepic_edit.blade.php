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
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>
                            <i class="glyphicon glyphicon-warning-sign"></i>
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif

            {!! Form::open(['url' => url('/profile/picture/store'),'files' => true]) !!}
            {{csrf_field()}}
            <div class="form-group">
                {{Form::Label('image','Profile Picture')}}
                {{Form::file('image',['class'=>'form-control'])}}
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
<?php

//$table->string('spouse_pob',30);
//$table->string('spouse_employer',30);
//$table->string('spouse_employer_address',30);
//$table->string('spouse_employer_phone',30);
//$table->string('spouse_position',30);
?>