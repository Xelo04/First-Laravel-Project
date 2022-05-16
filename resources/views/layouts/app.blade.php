<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <div class="navbar">
            <!-- HomeName -->
            <a class="nav site-name but" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <!-- Login Page -->
            @guest
            @if (Route::has('login'))
            <div>
                <a class="nav left but" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            @endif
            @if (Route::has('register'))
            <div>
                <a class="nav right but" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
            @endif
            <!-- Main HomePage -->
            @else
            <a class="nav left but" href="/add" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Add To Do Thing
            </a>
            <a class="nav left but" href="/user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            @endguest
        </div>
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>

</html>