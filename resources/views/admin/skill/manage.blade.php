@extends('admin.master')
@section('title')
    Manage Skills
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-lg-10 offset-1">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class="card-title">Manage Skills</h2>
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
                                <th>SKill Type</th>
                                <th>Skill Name</th>
                                <th class="text-end">Qualities</th>
                                <th class="text-end">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($skills as $skill)
                                <tr>
                                    <td>{{$i++}}.</td>
                                    <td>{{$skill->skill_type == 1 ? 'Technical Skill':'Soft Skill'}}</td>
                                    <td>
                                        {{$skill->name}}
                                    </td>
                                    <td class="text-end">
                                        {{$skill->description}}</td>
                                    <td class="text-end " >
                                        <div class="btn-group">
                                            <a href="{{route('skill.edit', ['id'=>$skill->id])}}" class="btn btn-outline-primary mx-2"><i class="las la-edit" style="font-size: 18px !important;"></i></a>
                                            <form action="{{route('skill.remove')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$skill->id}}">
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
