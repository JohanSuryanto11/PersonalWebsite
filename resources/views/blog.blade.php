@extends('layouts.master')
@section('content')
@extends('layouts.master')
@section('content')
<div class="under-construction-grid">
    <div class="text-wrapper">
        <div class="coming-soon">Coming Soon...</div>
        <div class="under-construct">Website is under construction</div>
        <div class="description">I will post everything that i've learned. </div>
        <div class="link"><a class="a-link" target="_blank" href="https://shattereddisk.github.io/rickroll/rickroll.mp4">See my sense of humor</a></div>
    </div>
    <div class="img-wrapper">
        <img class="img-con" src="{{asset('img/construction.png')}}" alt="under construction">
    </div>
</div>
<link href="{{ asset('css/social.css') }}" rel="stylesheet">
@endsection

@endsection
