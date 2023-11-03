@extends('front-end.master')
@section('title')
    Imran Ahmed Portfolio
@endsection
@section('content')
    <div class="row" id="home" style="background-image: url(../public/front-end-assets/img/bg-1.png); background-repeat: no-repeat; background-size: cover;">
        <div class="col-md-12 intro-para">
            <div class="intro px-2">
                <h4>Web Developer</h4>
                <h1>Hi, I am Imran <br> <span class="text-danger">Ahmed </span>From Bangladesh</h1>
            </div>
        </div>
{{--        <div class="col-md-6">--}}
{{--            <img src="{{asset('front-end-assets')}}/img/profile.png" alt="" class="m-3 img-fluid"  align="right">--}}
{{--        </div>--}}
    </div>
{{--        About Section?--}}
    <div class="row mt-3">
        <div class="col-md-4">
            <img src="{{asset('front-end-assets')}}/img/about-me.jpg" alt="" class="img-fluid abt-img my-4">
        </div>
        <div class="col-md-8 about-section" id="about">
            <h1 class="mb-3">About Me</h1>
            <div align="justify">
                <p>
                    An ambitious backend web developer, with professional goal of using my knowledge of PHP and the Laravel
                    framework to create unique and effective websites. Making dynamic, user-friendly websites that
                    improve users' online experiences is something I'm enthusiastic about. I hope to play a key part
                    in advancing success and growth in the digital sphere by always learning and keeping up with the
                    most recent trends and technology.
                </p>
                <div class="mt-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="about">
                            <button class="nav-link active" id="tech-skill-tab" data-bs-toggle="tab" data-bs-target="#tech_skill" type="button" role="tab" aria-controls="tech-skill" aria-selected="true">Technical Skills</button>
                        </li>
                        <li class="nav-item" role="about">
                            <button class="nav-link" id="soft-skill-tab" data-bs-toggle="tab" data-bs-target="#soft_skill" type="button" role="tab" aria-controls="soft-skill" aria-selected="true">Soft Skills</button>
                        </li>
                        <li class="nav-item" role="about">
                            <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience" type="button" role="tab" aria-controls="skill" aria-selected="true" style="display: none">Experience</button>
                        </li>
                        <li class="nav-item" role="about">
                            <button class="nav-link" id="certification-tab" data-bs-toggle="tab" data-bs-target="#certification" type="button" role="tab" aria-controls="certification" aria-selected="false">Certification</button>
                        </li>
                        <li class="nav-item" role="about">
                            <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="false">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tech_skill" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                <li><span>Programming Language: </span><br>PHP, Python, C.</li>
                                <li><span>Web Development: </span><br>HTML5, CSS3, JavaScript, jQuery, Ajax.</li>
                                <li><span>Framework: </span><br>Bootstrap-5, Laravel</li>
                                <li><span>Database Management: </span><br>MySQL</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="soft_skill" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                <li><i class="bi bi-chevron-double-right"></i>Time Management</li>
                                <li><i class="bi bi-chevron-double-right"></i>Team Collaboration</li>
                                <li><i class="bi bi-chevron-double-right"></i>Fluency in Speaking in Bangla and English</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                            <ul>
                                <li><b>PHP with Laravel Framework</b> (January, 2023 - April, 2023)<br><span>From: </span>BASIS SEIP, Dhaka, Bangladesh.</li>
                                <li><b>Ecommerce Website Development</b> (August 2023 - October 2023)<br><span>From: </span>AI Software Solutions, Dhaka, Bangladesh.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                            <ul>
                                <li>
                                    <span>BSc in Computer Science & Engineering</span> (2020 - Present)<br>
                                    <b>Daffodil International University</b><br>
                                    <b>Result: </b>3.90 out of 4.00
                                </li>
                                <li>
                                    <span>Higher Secondary Certificate </span>(2018 - 2019)<br>
                                    <b>Firoza Bashar Ideal College</b><br>
                                    <b>Result: </b>5.00 out of 5.00
                                </li>
                                <li>
                                    <span>Secondary School Certificate </span>(2015 - 2017)<br>
                                    <b>Firoza Bashar Ideal Institute</b><br>
                                    <b>Result: </b>5.00 out of 5.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="portfolio">
        <div class="col-md-12">
            <h1 class="mb-4" align="center">My Works</h1>
        </div>
        <div class="row mb-5" >
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item project">
                        <a href="">
                            <div class="card card-body" style="border-radius: 0.375rem">
                                <img src="{{asset('front-end-assets')}}/img/project-1.png" class="img-fluid" alt="...">
                                <div class="layer">
                                    <h3>DIU NLP and Machine Learning Lab</h3>
                                    <i class="bi bi-box-arrow-up-right" style="font-size: 40px; font-weight: bold; color: white"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
