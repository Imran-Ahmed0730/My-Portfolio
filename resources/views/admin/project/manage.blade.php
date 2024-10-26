@extends('admin.master')
@section('title')
    Manage Projects
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="card-title">Striped rows</h2>
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
                                <th>Project Title</th>
                                <th>Client Name</th>
                                <th class="text-end">Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$project->title}}</td>
                                    <td>
                                        @if($project->client_id == 0)
                                            Self
                                        @else
                                            {{$project->client->name}}
                                        @endif
                                        </td>
                                    <td class="{{$project->status == 0? 'text-danger':'text-success'}} text-end">
                                        {{$project->status == 0? 'Unpublished': 'Published'}}</td>
                                    <td class="text-end " >
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-outline-info"><i class="las la-info" style="font-size: 18px !important;"></i></a>
                                            <a href="{{route('project.edit', ['id'=>$project->id])}}" class="btn btn-outline-primary mx-2"><i class="las la-edit" style="font-size: 18px !important;"></i></a>
                                            <form action="{{route('project.remove')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$project->id}}">
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
