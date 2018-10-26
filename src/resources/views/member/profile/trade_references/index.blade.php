@extends('layouts.microsite')
@section('content')

<div class="inner-wrap">
  @include('partials.member_left_nav')
  <div class="card card-rounded">
    <div class="card-header bgm-blue">
      <h3>Please provide your trade references.</h3>
    </div>
    
    <div class="card-body p-t-20">

      <div class="text-right">
        <a href="{{url('/member/references/create')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add
        </a>
      </div>
      <table class="table table-hover">
          <thead>
          <tr>
              <th>Client or Supplier</th>
              <th>Contact Person</th>
              <th>Contact Number</th>
              <th colspan="2">Action</th>
          </tr>
          </thead>
          <tbody>

          @foreach($tradeReferences as $ref)
              <tr>
                  <td>{{$ref->client_name}}</td>
                  <td>{{$ref->contact_person}}</td>
                  <td>{{$ref->contact_number}}</td>
                  <td>Edit</td>
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
    <script>
        $(document).ready(function () {
            $(".progress-bar1").loading();
        });

    </script>
@endsection