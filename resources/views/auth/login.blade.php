@extends('layouts.app')

@section('content')
<div class="login-box">
    <div class="logo">
  
        <a href="javascript:void(0);">DD
            <b>NA</b>
        </a>
        <small>Sistema de Gestión de Asistencia</small>
      
    </div>
    <div class="card">
        <div class="body">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="msg">Ingresa tus credenciales para acceder al sistema</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}  class="filled-in chk-col-pink">

                       
                               
                    </div>
                    <div class="col-xs-4">
                            <button type="submit" class="btn btn-block bg-pink waves-effect">
                                    {{ __('Ingresar') }}
                                </button>

                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                  
                    <div class="col-sm">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu constraseña?') }}
                                </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
