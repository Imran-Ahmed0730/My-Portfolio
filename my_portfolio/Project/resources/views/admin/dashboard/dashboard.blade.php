@extends('admin.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row mt-5">
        <h5>Analytics</h5>
        <div class="col-lg-10 offset-1">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Total Clients</p>
                                    <h3 class="my-1 font-20 fw-bold">{{count($clients)}}</h3>
                                </div><!--end col-->
                                <div class="col-3 align-self-center">
                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-users font-24 align-self-center text-muted"></i>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Projects</p>
                                    <h3 class="my-1 font-20 fw-bold">{{$projectCount}}</h3>
                                </div><!--end col-->
                                <div class="col-3 align-self-center">
                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-clock font-24 align-self-center text-muted"></i>
                                    </div>
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Comments</p>
                                    <h3 class="my-1 font-20 fw-bold">{{count($comments)}}</h3>
                                </div><!--end col-->
                                <div class="col-3 align-self-center">
                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-activity font-24 align-self-center text-muted"></i>
                                    </div>
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-9">
                                    <p class="text-dark mb-0 fw-semibold">Messages</p>
                                    <h3 class="my-1 font-20 fw-bold">{{count($messages)}}</h3>
                                </div><!--end col-->
                                <div class="col-3 align-self-center">
                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                        <i class="ti ti-confetti font-24 align-self-center text-muted"></i>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
    </div>

    <div class="row">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Recent Comments ({{count($comments->where('status', 0))}})</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive browser_users">
                        <table class="table mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Project</th>
                                <th class="border-top-0">Comment</th>
                                <th class="border-top-0">Action</th>
                            </tr><!--end tr-->
                            </thead>
                            <tbody>
                            @php $i = 1; $j = 1 @endphp
                            @foreach($comments->where('status', 0) as $comment)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$comment->name}}</td>
                                    <td><a href="mailto:{{$comment->email}}">{{$comment->email}}</a></td>
                                    <td>{{$comment->project->title}}</td>
                                    <td>{{$comment->comment}}</td>
                                    <td>
                                        <a href="{{route('review.status', ['id'=>$comment->id])}}"
                                           title="Publish" class="btn btn-outline-info">
                                            <i class="las la-exchange-alt" style="font-size: 18px !important;"></i></a>
                                    </td>
                                </tr><!--end tr-->
                            @endforeach
                            </tbody>
                        </table> <!--end table-->
                    </div><!--end /div-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->

        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Latest Messages</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive browser_users">
                        <table class="table mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Message</th>
                            </tr><!--end tr-->
                            </thead>
                            <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{$j++}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->message}}</td>
                                </tr><!--end tr-->
                            @endforeach
                            </tbody>
                        </table> <!--end table-->
                    </div><!--end /div-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->
    </div>

        <div class="row">
            <div class="col-md-10 offset-1">
                <h4>Recent Projects</h4>
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-md-3">
                            <div class="card" style="height: 400px !important;">
                                <div class="card-header">
                                    <img src="{{asset($project->image)}}" class="img-fluid" style="height:300px !important;" alt="">
                                </div>
                                <div class="card-body"><h5>{{$project->title}}</h5></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
