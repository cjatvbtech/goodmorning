@extends('layouts.microsite')

@section('page-id', 'report')

@section('page-title', 'COMPANY LOAN APPLICATION')

@section('content')

<h2>Your application</h2>

<form novalidate autocomplete="off" id="loadApplication">

	<div class="card card-rounded">
		<div class="card-body p-t-20">

			<h3 class="text-center c-blue f-16"><strong>Your application is still on process</strong></h3>

			<hr />

			<div class="form-group text-center">
				<label class="control-label">We require you to upload all necessary documents stated below</label><br />
				<button type="button" class="btn btn-round-side w-200px">SELECT FILE</button>
			</div>

			<ul class="upload-note">
				<li>Lorem Ipsum is simply</li>
				<li>dummy text of the printing</li>
				<li>and typesetting industry</li>
				<li>Lorem Ipsum has been the</li>
				<li>industry's standard dummy</li>
				<li>text ever since the 1500s</li>
			</ul>

		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">SUBMIT</button>
			</div>
			<p class="text-center"><a href="#" class="f-medium f-16">Cancel my application</a></p>
		</div>
	</div>

</form>

@endsection

@section('modalElements')

<div class="modal fade" id="successModalMsg" tabindex="-1" role="dialog">
	<div class="modal-dialog sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h3 class="text-center c-blue f-16 m-b-0"><strong>Loan application successfully submitted</strong></h3>
				<p class="text-center m-b-0">Below is a a code for you to track your loan application</p>
				<p class="tracking-code" id="trackingCode">7829A</p>
			</div>
			<div class="modal-footer text-center">
				<button type="button" class="btn btn-default btn-md" data-dismiss="modal">DONE</button>
			</div>
		</div>
	</div>
</div>

@endsection

@section('otherJSLibrary')

<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#loadApplication').on('submit', function(e){
			$('#successModalMsg').modal('show');
			e.preventDefault();
		});
	});
</script>

@endsection