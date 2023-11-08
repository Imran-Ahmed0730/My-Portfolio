@extends('admin.master')
@section('title')
    Add Project
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">Edit Project Info</h2>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('project.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$project->id}}" name="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Project Type</label>
                                    <select name="project_type" id="" class="form-control">
                                        <option value="">------Select Project Type------</option>
                                        <option value="1" {{$project->project_type == 1 ? 'selected':''}}>Static Website</option>
                                        <option value="2" {{$project->project_type == 2 ? 'selected':''}}>Dynamic Web Application</option>
                                        <option value="3" {{$project->project_type == 3 ? 'selected':''}}>Backend Development</option>
                                        <option value="4" {{$project->project_type == 4 ? 'selected':''}}>WordPress</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Client</label>
                                    <select name="client_id" id="" class="form-control">
                                        <option value="">------Select Client------</option>
                                        <option value="0" {{$project->client_id == 0 ? 'selected':''}}>Self</option>
                                        @foreach($clients as $client)
                                            <option value="{{$client->id}}" {{$project->client_id == $client->id ? 'selected':''}}>{{$client->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="username">Project Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$project->title}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="useremail">Description</label>
                                    <textarea rows="5" class="form-control" name="description">{{$project->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="subject">Project Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="message">Other Images</label>
                                    <input type="file" class="form-control" name="other_image[]" multiple  accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="username">Project URL</label>
                                    <input type="text" class="form-control" name="project_url" value="{{$project->project_url}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Front-end</label>
                                    <input type="text" class="form-control" name="frontend" value="{{$project->frontend}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Backend</label>
                                    <input type="text" class="form-control" name="backend" value="{{$project->backend}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Other Information</label>
                                    <input type="text" class="form-control" name="others" value="{{$project->others}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label class="my-1 control-label">Project Status</label>
                                    <div class="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1" {{$project->status == 1 ? 'checked':''}}>
                                            <label class="form-check-label" for="inlineRadio1">Publish</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0" {{$project->status == 0 ? 'checked':''}}>
                                            <label class="form-check-label" for="inlineRadio2">Unpublish</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary px-4">Add Project</button>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection

