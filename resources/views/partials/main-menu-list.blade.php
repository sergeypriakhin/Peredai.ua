<li><a href="{{ action('DeliveryController@index') }}">Заявки</a></li>
<li><a href="{{ action('TripController@index') }}">Поездки</a></li>
@if (Auth::guest())
	<li><a href="{{ url('/auth/register') }}">Регистрация</a></li>
	<li><a class="waves-effect btn modal-trigger" href="{{ url('/login') }}">Вход</a></li>
	{{-- <li><a class="waves-effect teal darken-1 btn modal-trigger" href="#modal-signin">Вход</a></li> --}}
@else
	<li><a href="#">Добро пожаловать {{ Auth::user()->name }}</a></li>
	<li><a href="{{ url('/logout') }}" class="waves-effect btn">Выход</a></li>
@endif