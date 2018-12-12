@extends('layouts.guest')

@section('title', 'Ingreso')

@section('content')
<div class="card card-login mx-auto mt-5">
    <div class="card-header bg-primary"><h6 class="mb-0">Ingreso</h6></div>
    <div class="card-body pt-0">
        <form role="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Email</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center">
                        <a class="d-block" href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">{{ __('Ingresar') }}</button>
        </form>
    </div>
</div>
@endsection
