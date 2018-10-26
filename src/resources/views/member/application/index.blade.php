
@extends('layouts.microsite')
@section('content')

<div class="inner-wrap">
	@include('partials.member_left_nav')
	<div class="card card-rounded">
    <div class="card-header bgm-blue">
        <h2>My Loans</h2>
    </div>
    
    <div class="card-body p-t-20">
      <table class="table table-bordered">
        <tr>
          <th>Product</th>
          <th>Years To Pay</th>
          <th>Tracking Code</th>
          <th>Status</th>
        </tr>

        @foreach($application as $a)
          <tr>
            <td>{{$a->product->name}}</td>
            <td>{{$a->schedule}}</td>
            <td>{{$a->tracking_code}}</td>
            <td>{{$a->status->name}}</td>
          </tr>
        @endforeach
      </table>
    </div>

  </div>
</div>

@endsection
@section('scripts')

@endsection
