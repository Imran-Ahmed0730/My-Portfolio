@extends('front-end.master')
@section('title')
    Homepage
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 intro-para">
            <div class="intro">
                <h4>Web Developer</h4>
                <h1>Hi, I am Imran <br> <span class="text-danger">Ahmed </span>From Bangladesh</h1>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('front-end-assets')}}/img/profile.png" alt="" class="m-3 img-fluid"  align="right">
        </div>
    </div>
{{--        About Section?--}}
    <div class="row mt-5">
        <div class="col-md-4">
            <img src="{{asset('front-end-assets')}}/img/about-me.jpg" alt="" class="img-fluid abt-img">
        </div>
        <div class="col-md-8">
            <h1>About Me</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 align="center" class="services-header">My Services</h1>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
