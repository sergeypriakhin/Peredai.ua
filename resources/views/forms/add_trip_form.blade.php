<form action="{{ url('/trip/add/store') }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="user_id" value="{{Auth::id()}}">
	<div class="row">  <!-- location-->
		<div class="input-field col s12 m6">
			<i class="material-icons prefix">location_on</i>
			<input type="text" id="location_from" name="location_from" class="validate" placeholder="Место отправления">
		</div>
		<div class="input-field col s12 m6">
			<i class="material-icons prefix">location_on</i>
			<input type="text" id="location_where" name="location_where" class="validate" placeholder="Место прибытия">
		</div>
	</div> <!-- end row 1-->

	<div class="row"> <!-- calendar -->
		<div class="input-field col s6 m4">
			<i class="material-icons prefix">perm_contact_calendar</i>
			<input type="date" id="date_with" name="date_with" class="datepicker" placeholder="Дата отправления:">
		</div>
		<div class="input-field col s6 m4">
			<i class="material-icons prefix">perm_contact_calendar</i>
			<input type="date" id="date_to" name="date_to" class="datepicker" placeholder="Дата прибытия:">
		</div>
		<div class="input-field col s12 m4">
			<select id="transport_id" name="transport_id">
				@foreach ($transports as $value)
					<option value="{{$value->id}}">{{ $value->name }}</option>
				@endforeach
			</select>
			<label>Транспорт</label>
		</div>
	</div> <!-- end row 2 -->

	<div class="row"> <!-- comment -->
		<div class="input-field col s12">
			<i class="material-icons prefix">comment</i>
			<textarea id="comments" name="comments" class="materialize-textarea" placeholder="Комментарий"></textarea>
		</div>
	</div> <!-- end row 4-->

	<div class="row">
		<div class="col s12 m12 center-align">
			<button class="waves-effect btn-large light-green darken-1" type="submit">Сохранить поездку
			<i class="material-icons right">send</i>
			</button>
		</div>
	</div> <!-- end row 6-->


</form>