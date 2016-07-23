@extends('layouts.default')

@section('content')

	@include('partials.page-header')


<div class="container">
	<div class="row">
		<div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ URL::asset('/img/yuna.jpg') }}">
                    <span class="card-title">{{ $showDeliveryId->user->name }}</span>
                </div>
                <div class="card-content">
                    <p>
                        <a href="#">Заявки<span class="badge">{{$count}}</span></a>
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
              <span class="card-title">{{ $showDeliveryId->location_from }} ----------> {{ $showDeliveryId->location_where }}</span>
              <p>Когда доставить: {{ $showDeliveryId->date_with }} - {{ $showDeliveryId->date_to }}</p>
            </div>
            <div class="card-content">
              <p>{{ $showDeliveryId->comments }}</p>
            </div>
            <div class="card-content">
              <p>Вознаграждение: {{ $showDeliveryId->price }} {{ $showDeliveryId->currency->value }}</p>
              <p>Тип: {{ $showDeliveryId->typepackage->name }}</p>
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