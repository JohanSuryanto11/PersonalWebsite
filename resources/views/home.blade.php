@extends('layouts.master')

@section('content')
<div id="about" class="row align-items-center">
    <div class="container profile fade-in-left col">
        <img class="img-fluid" src="{{asset('img/home.png')}}" alt="profile" >
    </div>
    <div class="container text-white about col">
        <h1 class="fade-in-right"><b>I'm Johan Suryanto.<br>
            Fresh Graduate<br>
            <a class="country"> based in Indonesia, Bandung.</a></b>
        </h1>
        <h5 class="fade-in-right">I have excellent programming skills,
            I love to learn new things especially challenging ones.</h5>
    </div>
</div>
<div class="profile-bg"></div>

<div id="exp" class="experience-section">
    <h5 class="heading-work">WORK EXPERIENCE</h5>
    <h1 class="heading-companies">Companies I have worked for in the past.</h1>

    <div class="experience-block row">
        <div class="wrapper-exp col">
            <div class="number">01</div>
            <h3 class="heading-company-name"><span class="sahabat-offset">Sahabat Offset</span>, Operator</h3>
            <p class="worked-since">Aug 2016 - May 2023, 6 years 10 months</p>
            <p class="work-desc">I work in a printing company.
                I learn a lot in work, like :
            </p>
            <ul>
                <li class="list-style work-desc"> Time Menegement </li>
                <li class="list-style work-desc"> Quality Control </li>
                <li class="list-style work-desc"> Working Under Pressure </li>
            </ul>
        </div>
        <div id="more-experience" class="experience-block col">
            <div class="wrapper-exp">
                <div class="number">02</div>
                <h3 class="heading-company-name"><span class="next-company">Next up could be your company.
                <p class="work-desc mt-3">I would love to learn from my work
                </p>
            </div>
        </div>
    </div>



</div>

<div class="more-me row mt-5">
    <div class="wrapper-moreme left-side col">
        <div class="text-center">
            <h1 class="heading-moreme">Deep In My Mind</h1>
            <h1 class="inside-me">CHOOSE OPTIMISM <br>
            ALWAYS BE LEARNING <br>
            BE AGGRESSIVELY OPEN-MINDED <br>
            DON'T TAKE YOURSELF TOO SERIOUSLY <br>
            BE CREATIVE, ADAPTIVE, AND PERSEVERANCE
            </h1>
        </div>
        <a class="more-about-me-button" href="/social"> More About Me</a>
    </div>
    <div class="wrapper-moreme right-side col">
        <div class="picture-moreme" ></div>
    </div>

</div>

<div class="skill-set row mt-5">
    <div class="wrapper col">
        <h1 class="heading-skillset mb-3">Skillset</h1>
        <h5 class="p-skillset-title">With these skills, I can fill whatever your needs are, I can pretty much take on any challenge.</h5>
    </div>

    <div class="wrapper col-6">
        <h1 class="heading-skillset">Programming Language</h1>
        <div class="skill-row row">
            <div class="skill-wrapper col">
                <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/java.png')}}" alt="profile" >
                <h1 class="heading-language">Java</h1>
                <h5 class="p-skillset">My university has a strong emphasis on Java programming language, providing comprehensive courses and resources to equip me with in-depth knowledge and practical skills in Java development.</h5>
                <a class="link-button" href="/download/programmingcertificate.jpg" target="_blank">Certificate</a>
            </div>
            <div class="skill-wrapper col">
                <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/c++.png')}}" alt="profile" >
                <h1 class="heading-language">C++</h1>
                <h5 class="p-skillset">By assisting my friend with their project, I had the opportunity to dig into C++ programming, expanding my knowledge and honing my skills in this powerful language.</h5>
            </div>
            <div class="skill-wrapper col">
                <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/chash.png')}}" alt="profile" >
                <h1 class="heading-language">C#</h1>
                <h5 class="p-skillset">Since my final project using framework Unity, i gained valuable C# skills.</h5>
                <a class="link-button" href="https://github.com/JohanSuryanto11/HealthyTD" target="_blank">Project</a>
            </div>
        </div>
        <div class="skill-row row">
            <div class="skill-wrapper col">
                <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/php.png')}}" alt="profile" >
                <h1 class="heading-language">PHP</h1>
                <h5 class="p-skillset">During my time at university, I had the opportunity to learn PHP, acquiring a solid understanding of its concepts and practical application.</h5>
                <a class="link-button" href="/download/programmingcertificate.jpg" target="_blank">Certificate</a>
            </div>
            <div class="skill-wrapper col">
                <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/js.png')}}" alt="profile" >
                <h1 class="heading-language">JavaScript</h1>
                <h5 class="p-skillset">By building my own website, I not only created an online presence, but I also gained a comprehensive understanding of JavaScript, as it played a crucial role in enhancing the interactivity and functionality of my site.</h5>
            </div>
            <div class="skill-wrapper col">
                <img class="img-fluid skill-logo mb-3 mt-4" src="{{asset('img/logo/language/sql.png')}}" alt="profile" >
                <h1 class="heading-language">SQL</h1>
                <h5 class="p-skillset">Through my project during university, I gained hands-on experience with SQL, mastering its principles and techniques for effective database management and manipulation.</h5>
                <a class="link-button" href="/download/databasecertificate.jpg" target="_blank">Certificate</a>
            </div>
        </div>
    </div>
</div>

<div class="framework-section">
    <h1 class="heading-framework mt-5">Framework or IDE that i've worked with</h1>
    <div class="framework-grid">

        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/unreal.png')}}" alt="unreal engine" ></div>
        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/unity.png')}}" alt="unity" ></div>
        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/laravel.png')}}" alt="laravel" ></div>
        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/bootstrap.png')}}" alt="bootstrap" ></div>
        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/androidstudio.png')}}" alt="android studio" ></div>
        <div class="framework-box"><img class="img-fluid framework-logo" src="{{asset('img/logo/framework/netbeans.png')}}" alt="netbeans" ></div>
    </div>
</div>

<div id="project" class="my-project mt-5">
    <div class="wrapper project-grid">
        <div class="left-side-project">
            <h5 class="description-p" style="font-weight: bold"> My Projects</h5>
            <p class="project-title-desc">The work I've done in the past</p>
            <a class="link-project" href="https://github.com/JohanSuryanto11/HealthyTD" target="_blank"><div class="project-list mb-5">
                <img class="img-fluid project-img" src="{{asset('img/project/healthytd.png')}}" alt="profile" >
                <div class="project-description">
                    <h3 class="heading-description">Healthy TD</h3>
                    <h5 class="description-p">My final project for Bachelor degree. A strategy game simulating digestive system in humans</h5>
                </div>
            </div></a>
            <a class="link-project" href="https://github.com/JohanSuryanto11/UTS-2018130019" target="_blank"><div class="project-list mb-5">
                <img class="img-fluid project-img" src="{{asset('img/project/uts.png')}}" alt="profile" >
                <div class="project-description">
                    <h3 class="heading-description">Midterm Exam</h3>
                    <h5 class="description-p">My Midterm Exam Advanced Web Programming.</h5>
                </div>
            </div></a>
        </div>
        <div class="right-side-project">
            <a class="link-project" href="https://github.com/JohanSuryanto11/Sukses" target="_blank"><div class="project-list mb-5">
                <img class="img-fluid project-img" src="{{asset('img/project/sukses.png')}}" alt="profile" >
                <div class="project-description">
                    <h3 class="heading-description">Sukses</h3>
                    <h5 class="description-p">My Advanced Web Programming Exam</h5>
                </div>
            </div></a>
            <a class="link-project" href="https://github.com/JohanSuryanto11/ProjectAbner" target="_blank"><div class="project-list mb-5">
                <img class="img-fluid project-img" src="{{asset('img/project/project.png')}}" alt="profile" >
                <div class="project-description">
                    <h3 class="heading-description">Project Abner</h3>
                    <h5 class="description-p">I was commissioned by Abner. I was asked to create a simple CRUD application.</h5>
                </div>
            </div></a>
            <a class="link-project" href="https://github.com/JohanSuryanto11/GameRPG" target="_blank"><div class="project-list mb-5">
                <img class="img-fluid project-img" src="{{asset('img/project/rpggame.png')}}" alt="profile" >
                <div class="project-description">
                    <h3 class="heading-description">RPG Game</h3>
                    <h5 class="description-p">My advanced object oriented programming exam</h5>
                </div>
            </div></a>
        </div>
    </div>
</div>

<script src="{{ asset('js/home.js') }}" defer></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
