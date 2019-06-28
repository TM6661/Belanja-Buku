@extends('layouts.admin')

@section('login')
<div class="card card-login mx-auto mt-5">
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input placeholder="Email address" id="inputEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="inputEmail" hidden>{{ __('E-Mail Address') }}</label>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <label for="password" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Password') }}</label>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>


                <div class="text-center">
                    @if (Route::has('password.request'))
                    <a class="d-block small" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    <a class="d-block small" href="{{ route('register') }}">Register</a>
                </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>
@endsection 