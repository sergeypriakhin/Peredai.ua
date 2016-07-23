<form action="{{ url('/delivery/add/store') }}" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="user_id" value="{{Auth::id()}}">
		<div class="input-field col s12 m6">
			<i class="material-icons prefix">location_on</i>
			<input type="text" id="location_from" name="location_from" placeholder="Откуда" required>
			{{-- <label for="location_from">Откуда</label> --}}
		</div>
		<div class="input-field col s12 m6">
			<i class="material-icons prefix">location_on</i>
			<input id="location_where" type="text" name="location_where" placeholder="Куда" required>
			{{-- <label for="location_where">Куда</label> --}}
		</div>
	
		<div class="input-field col s6 m4">
			<i class="material-icons prefix">perm_contact_calendar</i>
			<input id="date_with" type="date" class="datepicker" name="date_with"  placeholder="Дата с:" required>
			{{-- <label for="date_with">Дата с:</label> --}}
		</div>
		<div class="input-field col s6 m4">
			<i class="material-icons prefix">perm_contact_calendar</i>
			<input id="date_to" type="date" class="datepicker" name="date_to" placeholder="Дата до:" required>
			{{-- <label for="date_to">Дата до:</label> --}}
		</div>
	
		<div class="input-field col s12 m8">
			<input id="title" name="title" type="text" class="validate" placeholder="Что привезти / увезти" required>
			{{-- <label for="title">Что привезти / увезти</label> --}}
		</div>
		<div class="input-field col s12 m4">
			<select name="typepackage_id" placeholder="Тип поссылки" required>
				@foreach ($typepackages as $value)
				<option value="{{$value->id}}">{{ $value->name }}</option>
				@endforeach
			</select>
			{{-- <label>Тип поссылки</label> --}}
		</div>

		<div class="input-field col s8 m4">
			<input id="price" name="price" type="text" placeholder="Цена" required>
		</div>
		<div class="input-field col s4 m4">
			<select name="currency_id" placeholder="Валюта" required>
				@foreach ($currency as $value)
				<option value="{{$value->id}}">{{ $value->value }}</option>
				@endforeach
			</select>
		</div>
		
		<div class="input-field col s12">
			<i class="material-icons prefix">comment</i>
			<textarea id="comments" class="materialize-textarea" name="comments" placeholder="Комментарии"></textarea>
		</div>

		<div class="file-field input-field col s12">
			<div class="btn">
				<span>Фото</span>
				<input type="file">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text" placeholder="Загрузить изображение">
			</div>
		</div>
		
		<div class="col s12 m12 center-align">
				<button class="waves-effect btn-large light-green darken-1" type="submit">Сохранить заявку
					<i class="material-icons right">send</i>
				</button>
		</div>
			
</form> <!-- end form -->
