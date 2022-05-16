@extends('layouts/app')
@section('title'){{ Auth::user()->name }} @endsection
@section('content')
<div class="container">
    <div class="infobox">
        <div class="header">
            My Account
        </div>
        <div class="footer2">
            <a class="footer2 but" href="http://127.0.0.1:8000/user">My details</a>
        </div>
        <div>
            <button class="logout but" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    <div class="userinfobox">
        <div class="userphoto"><img class="userphoto" src="https://www.citypng.com/public/uploads/small/11639594314mvt074h0zt5cijvfdn7gqxbrya72bzqulyd5bhqhemb5iasfe7gbydmr2jxk8lcclcp6qrgaoiuiavf4sendwc3jvwadddqmli2d.png" alt=""></div>
        <div class="username">{{ Auth::user()->name }}</div>
        <div class="useradress user">Your Email Adress: <br>{{ Auth::user()->email }}</div>
        <div class="userpassword user">
            <a class="userpassword but" href="{{ route('password.request') }}">Change Password</a>
        </div>
    </div>
</div>
@endsection