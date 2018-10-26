@extends('layouts.microsite')
@section('content')

<div class="inner-wrap">
  @include('partials.member_left_nav')
  <div class="card card-rounded">
    <div class="card-header bgm-blue">
        <h2>Please provide your bank accounts information.</h2>
    </div>
    
    <div class="card-body p-t-20">
      @if (session('message'))
        <div class="alert alert-success">
          <i class="glyphicon glyphicon-ok"></i>
          {{ session('message') }}
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {!! Form::open(['url' => route('bank-accounts-store')]) !!}

      {{csrf_field()}}

      <div class="form-group">
        <label class="control-label" for="type">Account Type</label>
        {{Form::select('type',$accountTypes,0,['class'=>'form-control','autocomplete'=>false,'placeHolder'=>'Type here'])}}
      </div>

      <div class="form-group">
        <label class="control-label" for="client_name">Bank Name</label>
        {{  Form::text('bank', null,['class'=>'form-control','required'=>'required','placeHolder'=>'Type here'])}}
      </div>

      <div class="form-group">
        <label class="control-label" for="client_name">Account Number</label>
        {{  Form::text('account_number', null,['class'=>'form-control','required'=>'required','placeHolder'=>'Type here'])}}
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
