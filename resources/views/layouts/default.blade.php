<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css') }}">
  </head>
  <body>
	
  <header>
		@include('partials.header')
	</header>

    <main>
    	@yield('content')
    </main>

    @include('partials.footer')
  
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('/js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/app.js') }}"></script>
    @section('script')
    @show
  </body>
</html>