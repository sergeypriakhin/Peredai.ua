@extends('layouts.default')

@section('content')

	@include('partials.page-header')


<div class="container">
	<div class="row">
		<div class="col s12 m4">

            <div class="card">
                <div class="card-image">
                    <img src="{{ URL::asset('/img/yuna.jpg') }}">
                    <span class="card-title">{{ $show_trip->user->name }}</span>
                </div>
                <div class="card-content">
                    <p>
                        <a href="#">Поездки<span class="badge">{{$count}}</span></a>
                    </p>
                    <p>
                        <a href="#">Отзывы <span class="badge">0</span></a>
                    </p>
                    <p>
                        <a href="#">Рейтинг </a>
                    </p>
                </div>
                <div class="card-action">
                    <p>Чтобы написать личное сообщение, нажмите на «Могу доставить»</p>
                    <a href="#">Могу доставить</a>
                </div>
            </div>
		</div>
        <div class="col s12 m8">
          <div class="card">
            <div class="card-content">
              <span class="card-title">{{ $show_trip->location_from }} ----------> {{ $show_trip->location_where }}</span>
            </div>
            <div class="card-content">
              <p>
              	отправление: {{ $show_trip->date_with }} 
              </p>
              <p>
              	прибытие: {{ $show_trip->date_to }}
              </p>
            </div>
            <div class="card-content">
              <p>Тип транспорта: {{ $show_trip->transport->name }}</p>
              <p>{{ $show_trip->comments }}</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
</div>

@stop