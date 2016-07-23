@extends('layouts.default')

@section('content')

	@include('partials.page-header')

	<div class="container">
    
	    <div class="row">

		    @foreach ($alls as $all)
		        <div class="col s12 m4">
		            <div class="card medium">
		                 <div class="card-image">
		                    <img class="activator" src="{{ URL::asset('/img/korobka.png')}}">
		                    <span class="card-title black-text">{{ $all->location_from .' - '. $all->location_where }}</span>
		                </div>
		                <div class="card-content">
		                    <span class="card-title activator">{{$all->title}}<i class="material-icons right">more_vert</i></span>
		                    <p>UAH {{ $all->price }}</p>
		                </div>
		                <div class="card-reveal">
		                    <span class="card-title">{{$all->title}}<i class="material-icons right">close</i></span>
		                    <p class="pink-text">{{ 'c '. $all->date_with . ' по ' . $all->date_to }}</p>
		                    <p>
		                    	{{ $all->comments }}
							</p>
		                    <div class="chip">
		                        <img src="{{ URL::asset('/img/yuna.jpg')}}" alt="Contact Person"> {{ $all->user->name }}
		                    </div>
		                </div>
		                <div class="card-action">
		                    <a href="{{ action('DeliveryController@show', $all->id) }}">Посмотреть заявку</a>
		                </div>
		            </div>
		        </div>
		    @endforeach

	    </div> <!-- row -->

	</div> <!-- container -->

	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a href="{{ action('DeliveryController@create') }}" class="btn-floating btn-large btn-accent" title="Добавить заявку">
        	<i class="material-icons">add</i>
        </a>
    </div>

@stop