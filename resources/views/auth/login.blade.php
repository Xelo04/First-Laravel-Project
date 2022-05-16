@extends('layouts.app')
@section('title')Login @endsection
@section('content')
<div class="login-background">
    <div class="login-box">
        <!-- Nagłówek     -->
        <div class="header">Login in to {{ config('app.name', 'Laravel') }}</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div class="footer">Email Adress:</div>
            <div class="footer-placeholder">
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- Hasło -->
            <div class="footer">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password:</label>
            </div>
            <div class="footer-placeholder">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            <!-- Checkbox -->
            <div class="footer">Remember Me:
            </div>
            <div class="footer-placeholder">
                <input type="checkbox">
            </div>
            <!-- Login Button -->
            <div class="login-button">
                <button class="but" type="submit">Login</button>
            </div>
            <!-- Forgot Button -->
            <div>
                @if (Route::has('password.request'))
                <a class="forgeter but" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
            <!-- New User Button -->
            <div>
                <a class="newuser but" href="{{ route('register') }}">
                    New User?
                </a>
            </div>
    </div>
</div>
</form>

</div>
</div>
@endsection