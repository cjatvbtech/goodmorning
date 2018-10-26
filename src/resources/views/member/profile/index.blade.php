@extends('layouts.microsite')
@section('content')

@if(auth()->user()->account_type == 'personal' )    
    @include('partials.member_left_nav')
@endif

<div class="inner-wrap">
  <div class="card card-rounded">
    <div class="card-header bgm-blue">
      <h3>Personal Information.</h3>
    </div>
    
    <div class="card-body p-t-20">

      <a href="{{url('/member/profile/edit')}}">
          <i class="fa fa-edit" aria-hidden="true"></i>
          Edit
      </a>
      @component('components.personal_profile',['client'=>$user])
      @endcomponent
    </div>
  </div>
</div>



@endsection
