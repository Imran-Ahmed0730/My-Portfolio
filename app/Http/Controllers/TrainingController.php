<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index(){
        return view('admin.certification.add');
    }
    public function add(Request $request){
//        return $request;
        Training::addOrUpdate($request);
        return redirect('certification/manage')->with('message', 'Certification Added Successfully');
    }
    public function manage(){
        return view('admin.certification.manage', [
            'certifications'=>Training::all()
        ]);
    }
    public function edit($id){
        return view('admin.certification.edit', [
            'certification'=>Training::find($id)
        ]);
    }
    public function update(Request $request){
        Training::addOrUpdate($request);
        return redirect('certification/manage')->with('message', 'Certification Info Updated Successfully');
    }
    public function remove(Request $request){
        Training::remove($request->id);
        return back()->with('message', 'Certification Removed Successfully');
    }
}
