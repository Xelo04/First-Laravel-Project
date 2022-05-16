@extends('layouts/app')
@section('title')To Do Things Adder @endsection
@section('content')
<div class="title">What you need to do?</div>
<form action="{{route('sites/save')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <input type="text" name="title" class="add titlle" placeholder="Name the title">
    </div>
    <div class="form-group">
        <textarea name="description" class="add desc" placeholder="Enter a description"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary add but">Save</button>
    </div>
</form>
@endsection