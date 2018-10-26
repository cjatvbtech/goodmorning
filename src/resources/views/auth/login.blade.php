@extends('layouts.login')

@section('content')
<div class="lc-avatar">
    <i class="sprite login-avatar-ico"></i>
</div>
<h3>ADMIN LOGIN</h3>
<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" placeholder="User name" value="{{ old('email') }}" required autofocus>
    </div>
    
    <div class="form-group m-b-10{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
    </div>

    @if ($errors->has('email'))
        <div class="err-message c-red text-center">
            <span>Invalid username or password</span>
        </div>
    @endif
    
    <div class="clearfix"></div>
    
    <p class="m-t-15">
        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </p>
    <p class="text-center f-12 m-b-0 c-orange">Forgot your <a data-toggle="modal" data-target="#uswPwdModal">user name or password</a></p>
</form>
<p class="contact-support text-center">
    <i class="sprite headphone-ico m-r-5 va-middle"></i> Need help? <a href="#"><strong>Contact support</strong></a>
</p>
@endsection
