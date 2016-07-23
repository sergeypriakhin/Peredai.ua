@extends('layouts.default')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row block-margin">
        <div class="col s12 m5">
            <div class="panel panel-default">
                <p class="flow-text">Сброс пароля</p>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="input-field">
                            <input type="email" name="email" value="{{ old('email') }}">
                            <label>Ваш email</label>
                        </div>

                        <div class="input-field">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Восстановить пароль
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
