@extends('layouts.microsite')

@section('content')

<div class="inner-wrap">
  @include('partials.member_left_nav')
  <div class="card card-rounded">
    <div class="card-header bgm-blue">
        <h3>Please sign up to expidite your loan/insurance application.</h3>
    </div>
    
    <div class="card-body p-t-20">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="post" action="/member/store">
        {{csrf_field()}}
        <div class="form-group">
          <label for="">I am applying for :</label>
          <br/>
          {{--{{ Form::radio('account_type', 'personal',false,['required'=>'required']) }} Personal Loan<br>--}}
          {{--{{ Form::radio('account_type', 'corporate',false) }} Company Loan--}}
          {{Form::text('account_type',$account_type,['class'=>'form-control'])}}
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          {{Form::text('name',null,['class'=>'form-control','placeHolder'=>'Enter Name','required'=>'required'])}}
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          {{Form::email('email',null,['class'=>'form-control','placeHolder'=>'Enter Email','required'=>'required'])}}
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          {{Form::password('password',['class'=>'form-control','placeHolder'=>'Enter Password','required'=>'required','id'=>'password'])}}
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password</label>
          {{Form::password('password_confirmation',['class'=>'form-control','placeHolder'=>'Confirm Password','required'=>'required','id'=>'confirm_password'])}}
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
  </div>
</div>

@endsection

