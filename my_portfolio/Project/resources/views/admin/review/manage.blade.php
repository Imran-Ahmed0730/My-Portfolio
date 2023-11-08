@extends('admin.master')
@section('title')
    Manage Projects
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="card-title">Manage Reviews</h2>
                    <h4 class="text-success mb-0">
                        {{Session('message')}}
                    </h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr class="" align="left">
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th class="text-end">Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($reviews as $review)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$review->project->title}}</td>
                                    <td>
                                        {{$review->name}}
                                    </td>
                                    <td>
                                        {{$review->email}}
                                    </td>
                                    <td>
                                        {{$review->comment}}
                                    </td>
                                    <td class="{{$review->status == 0? 'text-danger':'text-success'}} text-end">
                                        {{$review->status == 0? 'Unpublished': 'Published'}}</td>
                                    <td class="text-end " >
                                        <div class="btn-group">
                                            <a href="{{route('review.status', ['id'=>$review->id])}}" class="btn btn-outline-info"><i class="las la-exchange-alt" style="font-size: 18px !important;"></i></a>
                                            <form action="{{route('project.remove')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$review->id}}">
                                                <button type="submit" href="#" onclick="return confirm('Please Confirm Before Deleting the Project!!')" class="btn btn-outline-danger">
                                                    <i class="las la-trash-alt" style="font-size: 18px !important;"></i></button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                    </div><!--end /tableresponsive-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection
