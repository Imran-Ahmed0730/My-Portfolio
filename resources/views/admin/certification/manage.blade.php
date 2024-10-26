@extends('admin.master')
@section('title')
    Manage Certification
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="card-title">Manage Certification</h2>
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
                                <th>Name</th>
                                <th>Institution</th>
                                <th>Address</th>
                                <th>Starting Date</th>
                                <th class="text-end">Ending Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($certifications as $certification)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$certification->name}}</td>
                                    <td>
                                        {{$certification->institution}}
                                    </td>
                                    <td>{{$certification->address}}</td>
                                    <td class="text-end">
                                        {{$certification->starting_date}}
                                    </td>
                                    <td class="text-end">
                                        {{$certification->ending_date}}
                                    </td>
                                    <td class="text-end " >
                                        <div class="btn-group">
                                            <a href="{{route('certification.edit', ['id'=>$certification->id])}}" class="btn btn-outline-primary mx-2"><i class="las la-edit" style="font-size: 18px !important;"></i></a>
                                            <form action="{{route('certification.remove')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$certification->id}}">
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
