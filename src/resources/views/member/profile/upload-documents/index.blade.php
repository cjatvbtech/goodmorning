@extends('layouts.microsite')
@section('content')

<div class="inner-wrap">
  @include('partials.member_left_nav')
  <div class="card card-rounded">
    <div class="card-header bgm-blue">
        <h3>Please upload the required scanned documents.</h3>
    </div>
    
    <div class="card-body p-t-20">

      <div class="text-right">
        <a href="{{route('requirements-form')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add
        </a>
      </div>

      <table class="table table-hover">
          <thead>
            <tr>
                <th>Requirement Type (SSS/GSIS,Driver's License, Company ID)</th>
                <th>Preview</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($requirements as $req)
            <tr>
              <td>{{getRequirementName($req->type)}}</td>
              <td>{{$req->path}}</td>
              <td>Delete</td>
            </tr>
          @endforeach
          </tbody>
      </table>
        
    </div>

  </div>
</div>

@endsection
@section('scripts')

@endsection
