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
    <div class="wrapper">
        <h1 class="heading-skillset mb-3">Skillset</h1>
        <h5 class="p-skillset">With these skills, I can fill whatever your needs are, I can pretty much take on any challenge.</h5>
    </div>

    <div class="wrapper">
        <h1 class="heading-skillset mt-5">Programming Language</h1>
        <div class="skill-wrapper">
            <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/java.png')}}" alt="profile" >
            <h1 class="heading-language">Java</h1>
            <h5 class="p-skillset">My university has a strong emphasis on Java programming language, providing comprehensive courses and resources to equip me with in-depth knowledge and practical skills in Java development.</h5>
            <a class="link-button" href="/download/programmingcertificate.jpg" target="_blank">Certificate</a>
        </div>
        <div class="skill-wrapper">
            <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/c++.png')}}" alt="profile" >
            <h1 class="heading-language">C++</h1>
            <h5 class="p-skillset">By assisting my friend with their project, I had the opportunity to dig into C++ programming, expanding my knowledge and honing my skills in this powerful language.</h5>
        </div>
        <div class="skill-wrapper">
            <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/chash.png')}}" alt="profile" >
            <h1 class="heading-language">C#</h1>
            <h5 class="p-skillset">Since my final project using framework Unity, i gained valuable C# skills.</h5>
            <a class="link-button" href="https://github.com/JohanSuryanto11/HealthyTD" target="_blank">Certificate</a>
        </div>
        <div class="skill-wrapper">
            <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/php.png')}}" alt="profile" >
            <h1 class="heading-language">PHP</h1>
            <h5 class="p-skillset">During my time at university, I had the opportunity to learn PHP, acquiring a solid understanding of its concepts and practical application.</h5>
            <a class="link-button" href="/download/programmingcertificate.jpg" target="_blank">Certificate</a>
        </div>
        <div class="skill-wrapper">
            <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/js.png')}}" alt="profile" >
            <h1 class="heading-language">JavaScript</h1>
            <h5 class="p-skillset">By building my own website, I not only created an online presence, but I also gained a comprehensive understanding of JavaScript, as it played a crucial role in enhancing the interactivity and functionality of my site.</h5>
        </div>
        <div class="skill-wrapper">
            <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/sql.png')}}" alt="profile" >
            <h1 class="heading-language">SQL</h1>
            <h5 class="p-skillset">Through my project during university, I gained hands-on experience with SQL, mastering its principles and techniques for effective database management and manipulation.</h5>
            <a class="link-button" href="/download/databasecertificate.jpg" target="_blank">Certificate</a>
        </div>
    </div>


    <h1 class="heading-framework mt-5">Framework or IDE that i've worked with</h1>
    <div class="framework-grid">

        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/unreal.png')}}" alt="profile" ></div>
        <div class="framework-box">Unity</div>
        <div class="framework-box">Laravel</div>
        <div class="framework-box">Bootstrap</div>
        <div class="framework-box">Android Studio</div>
        <div class="framework-box">Netbeans</div>
    </div>

</div>
<script src="{{ asset('js/home.js') }}" defer></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
