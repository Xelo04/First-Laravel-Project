@extends('layouts.app')
@section('title')Register @endsection
@section('content')
<div class="login-background">
    <div class="login-box">
        <!-- Nagłówek     -->
        <div class="header">Register in to {{ config('app.name', 'Laravel') }}</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Nazwa -->
            <div class="footer reg">
                <label for="name">Name:</label>
            </div>
            <div class="footer-placeholder">
                <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- Email -->
            <div class="footer reg">
                <label for="email">Email Adress:</label>
            </div>
            <div class="footer-placeholder">
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- Hasło -->
            <div class="footer reg">
                <label for="password" class="col-md-4 col-form-label text-md-end">Password:</label>
            </div>
            <div class="footer-placeholder">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- Powtórz Hasło -->
            <div class="footer reg">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password:</label>
            </div>
            <div class="footer-placeholder">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <!-- Registration Button -->
            <div>
                <button class="register-button but" type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </form>
    </div>

</div>
@endsection