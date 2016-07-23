@extends('layouts.default')

@section('content')

	@include('partials.page-header')

	<div class="container">
	
		<div class="row">
			<div class="col s12 m12">
				@include('forms.add_delivery_form')
			</div>
		</div> <!-- end row -->
		
	</div> <!-- end container -->

@stop

