@extends('admin.master')
@section('title')
    Add Project
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">Add Project to Portfolio</h2>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('project.add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Project Type</label>
                                    <select name="project_type" id="" class="form-control">
                                        <option value="">------Select Project Type------</option>
                                        <option value="1">Static Website</option>
                                        <option value="2">Dynamic Web Application</option>
                                        <option value="3">Backend Development</option>
                                        <option value="4">WordPress</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Client Name</label>
                                    <select name="client_id" id="" class="form-control">
                                        <option value="">------Select Client------</option>
                                        <option value="1">Self</option>
                                        @foreach($clients as $client)
                                            <option value="{{$client->id}}">{{$client->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="username">Project Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="useremail">Description</label>
                                    <textarea rows="5" class="form-control" name="description"></textarea>
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
                                    <input type="text" class="form-control" name="project_url">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Front-end</label>
                                    <input type="text" class="form-control" name="frontend">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Backend</label>
                                    <input type="text" class="form-control" name="backend">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Other Information</label>
                                    <input type="text" class="form-control" name="others">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label class="my-1 control-label">Project Status</label>
                                    <div class="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="1">
                                            <label class="form-check-label" for="inlineRadio1">Publish</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
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

