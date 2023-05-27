@extends('layouts.guest')

@section('content')
<div class="card-header bg-{{ strToLower($title) }}">
     <div class="h4 login-box-msg">{{ $title ?? '' }} {{ __('Login') }}</div>
</div>
    <div class="card-body login-card-body">



        @isset($route)
            <form method="POST" action="{{ $route }}">
            @else
                <form method="POST" action="{{ route('login') }}">
                @endisset
                @csrf

                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="{{ __('Email') }}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="error invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="{{ __('Password') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="error invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary sr-only">
                            <input type="checkbox" id="remember" name="remember" checked>
                            <label for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <p class="mb-1">
                            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                        </p>
                    @endif
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


    </div>
    <!-- /.login-card-body -->
@endsection
