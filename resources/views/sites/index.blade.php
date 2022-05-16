@extends('layouts/app')
@section('title')HomePage @endsection
@section('content')
<table class="add table">
    @foreach($sites as $site)
    <tr>
        <td class="tab-one"><a class="link but" href="{{route('sites/show', $site)}}">{{$site->title}}</a></td>
        <td class="tab-one">{{$site->description}}</td>
    </tr>
    @endforeach
</table>
@endsection