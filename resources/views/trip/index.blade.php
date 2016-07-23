@extends('layouts.default')

@section('content')
    
    @include('partials.page-header')

	<div class="container">
		<div class="row">

		@foreach ($alls as $all)
			<div class="col s12 m4">
				<div class="card">
					<div class="card-content">
						<span class="card-title activator">{{$all->user->name}}<i class="material-icons right">more_vert</i></span>
						<p><span class="pink-text">Маршрут:</span> <br> {{ $all->location_from .' - '. $all->location_where }}</p>
						<p class="pink-text"> Дата: </p>
						<p>отправление {{ $all->date_with }}</p>
						<p>прибытие {{ $all->date_to }}</p>
						<p>обратно 21.04.2016</p>
					</div>
					<div class="card-reveal">
						<span class="card-title">Инфо<i class="material-icons right">close</i></span>
						<p> {{ $all->comments }} </p>
						<div class="chip">
							<img src="{{ URL::asset('/img/yuna.jpg')}}" alt="Contact Person"> {{ $all->user->name }}
						</div>
					</div>
					<div class="card-action">
						<a href="{{ action('TripController@show', $all->id) }}">Посмотреть поездку</a>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>  <!-- end container -->
	
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ action('TripController@create') }}" class="btn-floating btn-large btn-accent" title="Добавить поездку">
        	<i class="material-icons">add</i>
        </a>
    </div>
@stop