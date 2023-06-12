@extends('layouts.master')

@section('content')
<div class="row align-items-center">
    <div class="container mt-5 profile fade-in-left col">
        <img class="img-fluid" src="{{asset('img/home.png')}}" alt="profile" >
    </div>
    <div class="container text-white about col">
        <h1 class="fade-in-right"><b>I'm Johan Suryanto.<br>
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
            I learn a lot in work, like :
        </p>
        <ul>
            <li class="list-style work-desc"> Time Menegement </li>
        </ul>
    </div>

</div>

<div class="more-me mt-5">
    <div class="text-center">
        <h1 class="heading-moreme">Deep In My Mind</h1>
        <h1 class="inside-me">CHOOSE OPTIMISM <br>
        ALWAYS BE LEARNING <br>
        BE AGGRESSIVELY OPEN-MINDED <br>
        DON'T TAKE YOURSELF TOO SERIOUSLY <br>
        BE CREATIVE, ADAPTIVE, AND PERSEVERANCE
        </h1>
    </div>
    <a class="more-about-me-button"> More About Me</a>
    <div class="container mt-5 picture-moreme">
        <img class="img-fluid" src="{{asset('img/moreme.jpg')}}" alt="profile" >
    </div>
</div>

<div class="skill-set mt-5">
    <h1 class="heading-skillset">Skillset</h1>
    <p>With these skills, I can fill whatever your needs are, I can pretty much take on any challenge.</p>

    <h1>Programming Language</h1>
    <h1 class="heading-language">Java</h1>
    <h1 class="heading-language">JavaScript</h1>
    <h1 class="heading-language">C++</h1>
    <h1 class="heading-language">C#</h1>
    <h1 class="heading-language">PHP</h1>
    <h1 class="heading-language">SQL</h1>

    <h1>Framework</h1>
    <h1>Unreal Engine</h1>
    <h1>Unity</h1>
    <h1>Laravel</h1>
    <h1>Bootstrap</h1>
    <h1>Android Studio</h1>
    <h1></h1>
</div>
<script src="{{ asset('js/home.js') }}" defer></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
