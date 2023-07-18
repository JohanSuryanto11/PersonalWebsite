@extends('layouts.master')
@section('content')
<div class="under-construction-grid">
    <div class="img-wrapper-left">
        <img class="img-con" src="{{asset('img/lost2.png')}}" alt="under construction">
    </div>
    <div class="text-wrapper">
        <div class="coming-soon">Oops...</div>
        <div class="under-construct">Looks like you got lost..</div>
        <div class="description">Dont worry, i got you. </div>
        <div class="link"><a class="a-link" target="_blank" href="https://shattereddisk.github.io/rickroll/rickroll.mp4">Click here to get back</a></div>
    </div>
    <div class="img-wrapper">
        <img class="img-con" src="{{asset('img/lost.png')}}" alt="under construction">
    </div>
</div>
<link href="{{ asset('css/404.css') }}" rel="stylesheet">
@endsection
