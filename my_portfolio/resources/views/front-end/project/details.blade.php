@extends('front-end.master')
@section('title')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="parallax" style="background-image: url('{{asset($project->image)}}')"></div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <h3 class="text-center">{{$project->title}}</h3>
            <p><span>Project URL: </span><a href="{{$project->project_url}}" style="color: white">{{$project->project_url}}</a><br>
            <span>Description: </span>{{$project->description}}</p>
            <div class="mt-2">
                <span>Front-end: </span>{{$project->frontend}}<br>
                <span>Backend: </span>{{$project->backend}}<br>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-center mb-4">Project Screenshots</h1>
            <div class="row">
                @foreach($project->projectImage as  $image)
                    <div class="col-md-3">
                        <div class="card card-body">
                            <img src="{{asset($image->other_image)}}" alt="" class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-10 offset-1">
            <div class="card card-body " style="background-color: #121212 !important;">
                <div class="col-md-10 offset-1">
                    <div class="comment-btn text-center mb-3">
                        <a href="" onclick="event.preventDefault(); hide()" id="comment_btn" class="btn btn-outline-light">Some Recent Feedbacks</a>
                    </div>
                    <div class="" id="comments" style="display: none">
                        <div class="card comment-card mb-3" style="border: 0.5px solid white !important; background-color: #121212 !important;">
                            <div class="card-body py-0">
                                <div class="author-date">
                                    <div class="inner-author-date">
                                        <div class="author">
                                            <span class="">Ana Grainger</span>
                                        </div>
                                        <div class="date">1 Feb, 2019</div>
                                    </div>
                                </div>
                                <div class="comment-text mt-2">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                        ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="author-date">
                                    <div class="inner-author-date">
                                        <div class="author">
                                            <span class="">Ana Grainger</span>
                                        </div>
                                        <div class="date">1 Feb, 2019</div>
                                    </div>
                                </div>
                                <div class="comment-text mt-2">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                        ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-1">
                    <h2>Leave A Review</h2>
                    <form>
                        <div class="form-group row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="message" class="col-sm-2 col-form-label">Your Comment</label>
                            <div class="col-sm-10">
                                <textarea  class="form-control" rows="5" id="massage" placeholder="Your Message">Your Message</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="sub-btn btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
