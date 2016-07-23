<section class="registration-form">
    <div class="container">
        <div class="row">
            <div class="col s12 m5 center">
                <p class="flow-text">Воспользуйтесь своим аккаунтом в социальных сетях, чтобы зарегистрироваться быстро и легко</p>
                <div>
                    <a class="btn registration-form__btn red btn-large"><svg style="width:24px;height:24px;top: 6px; position: relative; right: 5px;" viewBox="0 0 24 24">
                    <path fill="#ffffff" d="M19,12H17V14H16V12H14V11H16V9H17V11H19M9.07,19.2C6.27,19.2 5,17.64 5,16.18C5,15.73 5.14,14.59 6.5,13.8C7.25,13.33 8.33,13 9.62,12.89C9.43,12.64 9.28,12.34 9.28,11.9C9.28,11.75 9.3,11.59 9.34,11.44H8.95C7,11.44 5.8,9.89 5.8,8.39C5.8,6.66 7.09,4.8 9.91,4.8H14.13L13.79,5.14L13.08,5.85L13,5.91H12.3C12.71,6.33 13.2,7 13.2,8.07C13.2,9.47 12.46,10.16 11.64,10.8C11.5,10.92 11.22,11.18 11.22,11.5C11.22,11.82 11.46,12 11.61,12.14C11.74,12.25 11.9,12.36 12.08,12.5C12.89,13.05 14,13.83 14,15.36C14,17.13 12.71,19.2 9.07,19.2M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2M10.57,13.81C10.46,13.8 10.38,13.8 10.25,13.8H10.23C9.97,13.8 9.08,13.85 8.41,14.07C7.77,14.31 7,14.79 7,15.77C7,16.85 8.04,18 9.96,18C11.5,18 12.4,17 12.4,16C12.4,15.25 11.94,14.79 10.57,13.81M11.2,8.87C11.2,7.85 10.57,5.85 9.12,5.85C8.5,5.85 7.8,6.29 7.8,7.5C7.8,8.7 8.42,10.45 9.77,10.45C9.83,10.45 11.2,10.44 11.2,8.87Z"></path>
                    </svg>
                    Google</a>
                </div>
                <div>
                    <a class="btn btn-large registration-form__btn blue darken-4"><svg style="width:24px;height:24px;top: 6px; position: relative; right: 5px;" viewBox="0 0 24 24">
                    <path fill="#ffffff" d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                    </svg>
                    Facebook</a>
                </div>
            </div>
            <div class="col s2 center hide-on-small-only">
                <div class="registration-form__line"></div>
                <span>или</span>
                <div class="registration-form__line"></div>
            </div>
            <div class="col s12 m5">
                <p class="flow-text center">Пройдите обычную регистрацию. Просто заполните все необходимые поля и ваш аккаунт будет зарегистрирован</p>

                    <form method="POST" action="{{ url('/auth/register') }}">
                        {!! csrf_field() !!}
                        
                        <div class="input-field{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" value="{{ old('name') }}">
                            <label>Ваше имя</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- email --}}
                        <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" value="{{ old('email') }}">
                            <label>Email</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        {{-- password --}}
                        <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" value="{{ old('password') }}">
                            <label>Пароль</label>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- password_confirmation --}}
                        <div class="input-field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                            <label>Повторите пароль</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Зарегестрироватся
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>