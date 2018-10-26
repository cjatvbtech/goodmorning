@extends('layouts.microsite')
@section('content')

<div class="inner-wrap">
  @include('partials.member_left_nav')
  <div class="card card-rounded">
    <div class="card-header bgm-blue"></div>
    
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

    {!! Form::open(['url' => url('/member/profile/trade-references')]) !!}

    {{csrf_field()}}

    <div class="form-group">
        <label class="control-label" for="client_name">Client or Supplier</label>
        {{ Form::text('client_name', null,['class'=>'form-control','required'=>'required'])}}
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="contact_person">Contact Person</label>
            {{ Form::text('contact_person', null,['class'=>'form-control','required'=>'required'])}}
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="contact_number">Contact Number</label>
            {{ Form::text('contact_number', null,['class'=>'form-control','required'=>'required'])}}
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

@endsection
