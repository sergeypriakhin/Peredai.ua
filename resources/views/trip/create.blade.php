@extends('layouts.default')

@section('content')

	@include('partials.page-header')

	<div class="container">
	
		<div class="row">
			<div class="col s12 m12">
				@include('forms.add_trip_form')
			</div>
		</div>

		<div id="map"></div>
					
	</div>

@stop

@section('script')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4Oab2xMoET1KlqK1pruXd4jBRJiMe9yk&libraries=places"></script>
	<script type="text/javascript" src="{{ URL::asset('/js/map.js') }}"></script>
@stop