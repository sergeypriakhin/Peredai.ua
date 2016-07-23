<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Footer Content</h5>
				<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">ПОЕЗДКИ И ЗАЯВКИ</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="{{ action('DeliveryController@index') }}">Текущие заявки</a></li>
					<li><a class="grey-text text-lighten-3" href="{{ action('TripController@index') }} ">Текущие поездки</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2016 Copyright Text
			<a class="grey-text text-lighten-4 right" href="#!">Peredai.ua</a>
		</div>
	</div>
</footer>