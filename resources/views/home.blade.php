@extends('layouts.master')

@section('content')
<div class="row align-items-center">
    <div class="container mt-5 profile col">
        <img class="img-fluid" src="{{asset('img/home.png')}}" alt="profile" >
    </div>
    <div class="container text-white about col">
        <h1><b>I'm Johan Suryanto.<br>
            Fresh Graduate<br>
            <a class="country"> based in Indonesia, Bandung.</a></b>
        </h1>
        <h5>I have excellent programming skills,
            I love to learn new things especially challenging ones.</h5>
    </div>
</div>
<div class="profile-bg"></div>

<div id="exp" class="container experience-section">
    <h5 class="heading-work">WORK EXPERIENCE</h5>
    <h1 class="heading-companies">Companies I have worked for in the past.</h1>

    <div class="experience-block">
        <div class="number">01</div>
        <h3 class="heading-company-name"><span class="sahabat-offset">Sahabat Offset</span>, Operator</h3>
        <p class="worked-since">Aug 2016 - May 2023, 6 years 10 months</p>
        <p class="work-desc">I work in a printing company.
            I learn a lot in work, like</p>
    </div>

</div>
<script src="{{ asset('js/home.js') }}" defer></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
