@extends('admin.master')
@section('title')
    Edit Skills
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">Edit Skills</h2>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('skill.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$skill->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Skill Type</label>
                                    <select name="skill_type" id="" class="form-control">
                                        <option value="">------Select Skill Type------</option>
                                        <option value="1" {{$skill->skill_type == 1 ? 'selected': ''}}>Technical Skill</option>
                                        <option value="2" {{$skill->skill_type == 2 ? 'selected': ''}}>Soft Skill</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Skill Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$skill->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="useremail">Description</label>
                                    <textarea rows="5" class="form-control" name="description">{{$skill->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary px-4">Update Skill</button>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection

