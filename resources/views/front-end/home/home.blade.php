@extends('front-end.master')
@section('title')
    Imran Ahmed Portfolio
@endsection
@section('content')
    <div class="row" id="home" style="background-image: url({{asset('/')}}/front-end-assets/img/bg-1.png); background-repeat: no-repeat; background-size: cover;">
        <div class="col-md-12 intro-para">
            <div class="intro">
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
                                @foreach($techSkills as $skill)
                                    <li><span>{{$skill->name}}: </span><br>{{$skill->description}}.</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="soft_skill" role="tabpanel" aria-labelledby="home-tab">
                            <ul>
                                @foreach($softSkills as $skill)
                                    <li><i class="bi bi-chevron-double-right"></i>{{$skill->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="certification" role="tabpanel" aria-labelledby="certification-tab">
                            <ul>
                                @foreach($certifications as $certificate)
                                    <li>
                                        <b>{{$certificate->name}}</b>
                                        ( {{date('M, Y', strtotime($certificate->starting_date))}}
                                        @if($certificate->ending_date)
                                             - {{date('M, Y', strtotime($certificate->ending_date))}}
                                        @endif
                                        )
                                        <br><span>
                                        From: </span>{{$certificate->institution}}, {{$certificate->address}}.</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                            <ul>
                                @foreach($degrees as $degree)
                                    <li>
                                        <span>{{$degree->degree_name}}</span> ({{$degree->Year}})<br>
                                        <b>{{$degree->institution}}</b><br>
                                        <b>Result: </b>{{$degree->result}} out of {{$degree->grade_point}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" id="portfolio">
        <div class="">
            <h1 class="mb-4" align="center">My Works</h1>
        </div>
        <div class="row mb-5" >
            @foreach($projects as $project)
                @if($project->client_id != 3)
                    <div class="col-md-3 mb-3">
                    <div class="card card-body project bg-dark" style="">
                        <a href="{{$project->project_url}}" target="_blank">
                            <img src="{{$project->image}}" class="project-img" alt="...">
                            <div class="layer">
                                <h3>{{$project->title}}</h3>
                                <i class="bi bi-box-arrow-up-right" style="font-size: 40px; font-weight: bold; color: white"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div class="">
            <h1 class="mb-4" align="center">Also Worked On</h1>
        </div>
        <div class="row mb-5" >
            @foreach($projects as $project)
                @if($project->client_id == 3)
                    <div class="col-md-3 mb-3">
                    <div class="card card-body project bg-dark" style="">
                        <a href="{{$project->project_url}}" target="_blank">
                            <img src="{{$project->image}}" class="project-img" alt="..." >
                            <div class="layer">
                                <h3>{{$project->title}}</h3>
                                <i class="bi bi-box-arrow-up-right" style="font-size: 40px; font-weight: bold; color: white"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
            @endforeach
                <div class="row mt-3">
                    <div class="col-md-12" align="center">
                        <a href="" onclick="event.preventDefault(); hide()" id="comment_btn" class="btn review-btn">Review My Work</a>
                    </div>
                </div>
                <div class="row mt-5" id="comments" style="display: none">
                    <div class="col-md-10 offset-1">
                        <div class="card card-body" style="background-color: #121212 !important;">
                            <div class="col-md-10 offset-1">
                                <h2>Leave A Review</h2>
                                <form action="{{route('review')}}" onsubmit="return validate()" method="post" id="reviewForm">
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="reviewerName" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Project</label>
                                        <div class="col-sm-10">
                                            <select name="project_id" id="projectId" class="form-control">
                                                <option value="" selected>Select Project</option>
                                                <option value="0">Personal Portfolio</option>
                                                @foreach($projects as $project)
                                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="message" class="col-sm-2 col-form-label">Comment</label>
                                        <div class="col-sm-10">
                                            <textarea  class="form-control" rows="5" id="comment" name="comment" placeholder="Your Message"></textarea>
                                        </div>
                                        @error('g-recaptcha-response')
                                        <div class="invalid-feedback" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label for="message" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button class="sub-btn btn g-recaptcha" data-sitekey="{{config('services.recaptcha.site_key')}}"
                                                    data-callback="onSubmit"
                                                    data-action="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    <div class="row my-5">
        <h1 class="text-center mb-4">Project Reviews</h1>
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                @foreach($reviews as $review)
                    <div class="item">
                        <div class="card bg-dark"v style="height: 300px !important;">
                            <div class="card-header text-center py-1" style="height: 100px;">
                                <i class="bi bi-quote" style="font-weight: 900; font-size: 80px"></i>
                            </div>
                            <div class="card-body">
                                <p class="fw-bold"><span>Project: </span> {{$review->project->title}}</p>
                                <p align="justify">"{{$review->comment}}"</p>
                                <span align="right">--{{$review->name}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script>
        function onSubmit(token) {
            document.getElementById('reviewForm').submit();
        }
    </script>
@endpush
