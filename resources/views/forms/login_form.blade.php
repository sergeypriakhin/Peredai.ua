<div class="row">
	<div class="col s12 m5 center">
		<p class="flow-text">Быстрый вход</p>
		<div>
			<a class="btn registration-form__btn red">Google</a>
		</div>
		<div>
			<a class="btn registration-form__btn blue darken-4">Facebook</a>
		</div>
	</div>
	<div class="col s2 center hide-on-small-only">
        <div class="registration-form__line"></div>
           	<span>или</span>
        <div class="registration-form__line"></div>
    </div>
	<div class="col s12 m5">
		<p class="flow-text center">Для входа в систему заполните поля</p>
		<form method="POST" action="{{ url('/login') }}">
			{!! csrf_field() !!}
			<div class="input-field">
				<input type="email" name="email" value="{{ old('email') }}">
				<label>Ваш email</label>
			</div>
			<div class="input-field">
				<input type="password" id="password" name="password">
				<label for="password"> Ваш пароль</label>
			</div>
			<div>
				 <input type="checkbox" id="remember" name="remember"/>
      			 <label for="remember">Запомнить меня</label>
			</div>
			<div class="input-field">
				<button class="btn waves-effect" type="submit" name="submit">Вход<i class="material-icons right">send</i></button>
			</div>
		</form>
	</div>
</div>