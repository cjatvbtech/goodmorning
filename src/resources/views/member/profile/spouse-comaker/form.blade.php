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
        <h3>Co-Maker Information</h3>
    </div>
    
    <div class="card-body p-t-20">
      @if (session('message'))
        <div class="alert alert-success">
          <i class="glyphicon glyphicon-ok"></i>
          {{ session('message') }}
        </div>
      @endif

      {!! Form::open(['url' => url('/member/profile/comaker')]) !!}

        {{csrf_field()}}
        {{ Form::hidden('id', $user->profile->comakers->id,['class'=>'form-control','placeHolder'=>'Name','required'=>'required'])}}

        <div class="form-group">
          <label class="control-label" for="name">Name</label>
          {{ Form::text('name',$user->profile->comakers->name,['class'=>'form-control','placeHolder'=>'Type here','required'=>'required'])}}
        </div>

        <div class="form-group">
          <label class="control-label" for="relationship">Relationship</label>
          {{ Form::text('relationship', $user->profile->comakers->relationship,['class'=>'form-control','placeHolder'=>'Type here','required'=>'required'])}}
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="control-label" for="email">E-mail</label>
              {{ Form::text('email', $user->profile->comakers->email,['class'=>'form-control','placeHolder'=>'Email','required'=>'required'])}}
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="control-label" for="cellphone">Cellphone number</label>
              {{ Form::text('cellphone',$user->profile->comakers->cellphone,['class'=>'form-control','placeHolder'=>'Type here'])}}
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="control-label" for="dob">Date of birth</label>
              {{  Form::date('dob', $user->profile->comakers->dob,['placeHolder'=>'Spouse\'s date of birth','class'=>'form-control']) }}
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label class="control-label" for="pob">Place of birth</label>
              {{ Form::text('pob',$user->profile->comakers->pob,['class'=>'form-control','placeHolder'=>'Type here'])}}
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="employer">Employer</label>
          {{ Form::text('employer',  $user->profile->comakers->employer,['class'=>'form-control','placeHolder'=>'Type here'])}}
        </div>
        <div class="form-group">
          <label class="control-label" for="employer_address">Employer address</label>
          {{ Form::text('employer_address', $user->profile->comakers->employer_address,['class'=>'form-control','placeHolder'=>'Type here'])}}
        </div>
        <div class="form-group">
          <label class="control-label" for="employer_phone">Employer phone</label>
          {{ Form::text('employer_phone', $user->profile->comakers->employer_phone,['class'=>'form-control','placeHolder'=>'Type here'])}}
        </div>

        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
              <label class="control-label" for="position">Position</label>
              {{ Form::text('position', $user->profile->comakers->position,['class'=>'form-control','placeHolder'=>'Type here'])}}
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class="control-label" for="length_of_service">Length of service</label>
              {{ Form::text('length_of_service', $user->profile->comakers->length_of_service,['class'=>'form-control','placeHolder'=>'In Year(s)'])}}
            </div>
          </div>
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
