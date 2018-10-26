@extends('layouts.microsite')
@section('content')
    <style>
        .profile-pic {
            margin-top: 20px;
        }

        label {
            font-weight: bolder;
        }
    </style>

<div class="inner-wrap">
  @include('partials.member_left_nav')
  <div class="card card-rounded">
    <div class="card-header bgm-blue">
        <h3>Please upload the required scanned documents.</h3>
    </div>
    
    <div class="card-body p-t-20">
      @if (session('message'))
        <div class="alert alert-success">
          <i class="glyphicon glyphicon-ok"></i>
          {{ session('message') }}
        </div>
      @endif

      {!! Form::open(['url' => url('member/profile/store')]) !!}
      <div class="form-group">
        <label class="control-label" for="home_address">Home address</label>
        {{  Form::text('home_address', $member->profile->home_address,['class'=>'form-control','placeHolder'=>'Home Address','required'=>'required'])}}
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label" for="dob">Date of birth</label>
            {{   Form::date('dob', $member->profile->dob,
                    ['placeHolder'=>'Date of Birth','class'=>'form-control','required'=>'required'])
            }}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label" for="pob">Place of birth</label>
            {{  Form::text('pob', $member->profile->pob,['class'=>'form-control','placeHolder'=>'Place of birth','required'=>'required'])}}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label" for="cellphone_number">Cellphone number</label>
            {{  Form::text('cellphone_number', $member->profile->cellphone_number,['class'=>'form-control','placeHolder'=>'Cellphone Number','required'=>'required'])}}
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label class="control-label" for="marital_status">Marital status</label>
            {{  Form::select('marital_status',
                  ['Marital status','M'=>'Married','S'=>'Single','SE'=>'Separated'],
                  $member->profile->marital_status,//default value
                  ['class'=>'form-control','autocomplete'=>'off','required'=>'required']
                )
            }}
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label" for="office_address">Office address</label>
        {{  Form::text('office_address', $member->profile->office_address,['class'=>'form-control','placeHolder'=>'Office Address','required'=>'required'])}}
      </div>
      <div class="form-group">
        <label class="control-label" for="sss_gsis">GSIS/SSS number</label>
        {{  Form::text('sss_gsis', $member->profile->sss_gsis,['class'=>'form-control','placeHolder'=>'SSS / GSIS','required'=>'required'])}}
      </div>

      <div class="form-group">
        <label class="control-label" for="tin">T.I.N.</label>
        {{  Form::text('tin', $member->profile->tin,['class'=>'form-control','placeHolder'=>'TIN','required'=>'required'])}}
      </div>

      <div class="form-group">
        <label class="control-label" for="driver_license">Driver's license</label>
        {{  Form::text('driver_license', $member->profile->driver_license,['class'=>'form-control','placeHolder'=>'Driver\'s License'])}}
      </div>

      <div class="form-group">
        <label class="control-label" for="passport_number">Passport number</label>
        {{  Form::text('passport_number', $member->profile->passport_number,['class'=>'form-control','placeHolder'=>'Passport'])}}
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">
              <i class="glyphicon glyphicon-floppy-disk"></i>
              Save
          </button>
      </div>
      {!! Form::close() !!}

    </div>
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