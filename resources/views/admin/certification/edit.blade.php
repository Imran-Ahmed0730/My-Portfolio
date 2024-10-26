@extends('admin.master')
@section('title')
    Edit Certification
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">Edit Certification Info</h2>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('certification.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$certification->id}}" name="id">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Certification Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$certification->name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Institution</label>
                                    <input type="text" class="form-control" name="institution" value="{{$certification->institution}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="useremail">Address</label>
                                    <textarea rows="5" class="form-control" name="address">{{$certification->address}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subject">Starting Date</label>
                                    <input type="date" class="form-control" name="starting_date" value="{{$certification->starting_date}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subject">Ending Date</label>
                                    <input type="date" class="form-control" name="ending_date" value="{{$certification->ending_date}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary px-4">Update Certification</button>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection

