@extends('admin.master')
@section('title')
    Add Certification
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title text-center">Add Training Certification to Portfolio</h2>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('certification.add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Certification Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username">Institution</label>
                                    <input type="text" class="form-control" name="institution">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="useremail">Address</label>
                                    <textarea rows="5" class="form-control" name="address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subject">Starting Date</label>
                                    <input type="date" class="form-control" name="starting_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="subject">Ending Date</label>
                                    <input type="date" class="form-control" name="ending_date">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-primary px-4">Add Certification</button>
                            </div>
                        </div>
                    </form>
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection

