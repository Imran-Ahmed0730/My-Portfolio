@extends('admin.master')
@section('title')
    Edit Degree
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">Edit Degree</h2>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('education.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$degree->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Degree Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$degree->degree_name}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Institution</label>
                                    <input type="text" class="form-control" name="institution" value="{{$degree->institution}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="subject">Year</label>
                                    <input type="text" class="form-control" name="year" value="{{$degree->Year}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <label for="subject">Result</label>
                                    <input type="text" class="form-control" name="result" value="{{$degree->result}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="subject">Grading Scale</label>
                                    <input type="text" class="form-control" name="grade_point" value="{{$degree->grade_point}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary px-4">Update Degree</button>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection

