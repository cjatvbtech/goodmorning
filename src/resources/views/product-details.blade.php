@extends('layouts.microsite')

@section('page-id', 'report')

@section('page-title', 'PRODUCT DETAILS')

@section('content')

<h2>Truck details</h2>

<div class="card card-rounded product-info">
	<div class="card-header bgm-blue">
	</div>
	<div class="card-body p-0">
		<div class="frame-responsive frame-responsive-16by9">
			<img src="{{asset($product->image)}}" class="item-image prod-hero"> <!-- REMOVE [prod-hero] once integrated -->
		</div>

		<div class="inner-content b-bottom">
			<div class="row">
				<div class="col-sm-6">
					<a href="/loan-application" class="btn btn-sm pull-right btn-round-side m-t-15">SELECT</a>
					<h3>{{$product->name}}</h3>
				</div>
				<div class="col-sm-6">
					<p class="m-b-0 text-xs-center text-sm-right item-price">
						<small>Unit price</small>
						&#x20B1; {{number_format($product->price,2)}}
					</p>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
				<div class="col-sm-5 b-right">
					<table class="table table-striped table-specification">
						<thead>
							<tr>
								<th colspan="2">SPECIFICATIONS</th>
							</tr>							
						</thead>
						<tbody>
							<tr>
								<td class="w-200px">Overall Length (mm)</td>
								<td class="text-right">4660</td>
							</tr>
							<tr>
								<td class="w-200px">Overall Width (mm)</td>
								<td class="text-right">1695</td>
							</tr>
							<tr>
								<td class="w-200px">Overall Height (mm)</td>
								<td class="text-right">2005</td>
							</tr>
							<tr>
								<td class="w-200px">Wheelbase (mm)</td>
								<td class="text-right">2500</td>
							</tr>
							<tr>
								<td class="w-200px">Rear Body Length (ft)</td>
								<td class="text-right">10</td>
							</tr>
							<tr>
								<td class="w-200px">Frame Width (mm)</td>
								<td class="text-right">700</td>
							</tr>
							<tr>
								<td class="w-200px">Tread (Front/Rear) (mm)</td>
								<td class="text-right">1390 / 1380</td>
							</tr>
							<tr>
								<td class="w-200px">Min. Ground Clearance (mm)</td>
								<td class="text-right">200</td>
							</tr>
							<tr>
								<td class="w-200px">Curb Weight (kg)</td>
								<td class="text-right">1760</td>
							</tr>
							<tr>
								<td class="w-200px">Gross Vehicle Weight (kg)</td>
								<td class="text-right">4400</td>
							</tr>
							<tr>
								<td class="w-200px">Payload (kg)</td>
								<td class="text-right">2640</td>
							</tr>
							<tr>
								<td class="w-200px">Fuel Tank Capacity (L)</td>
								<td class="text-right">70</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-7">
					<div class="inner-content p-25 text-xs-justify">
						{!! nl2br($product->description)  !!}
					</div>
				</div>
		</div>

	</div>
</div>

<div class="row">
	<div class="col-sm-5">
		<p class="text-xs-center text-sm-left">Have some questions? <a href="#" class="c-blue">Find the nearest dealer</a></p>
	</div>
	<div class="col-sm-7">
		<p class="m-b-0 text-xs-center text-sm-right">
			{{--<a href="#" class="btn btn-round-side btn-md">MORE DETAILS</a>--}}
			<a href="/loan-application" class="btn btn-round-side btn-md w-150px">SELECT</a>
		</p>
	</div>
</div>

@endsection

@section('otherJSLibrary')

<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
	$(function(){

	});
</script>

@endsection