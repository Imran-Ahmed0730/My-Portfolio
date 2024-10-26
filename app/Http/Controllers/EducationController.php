<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function index(){
        return view('admin.education.add');
    }
    public function add(Request $request){
//        return $request;
        Education::addOrUpdate($request);
        return redirect('education/manage')->with('message', 'education Added Successfully');
    }
    public function manage(){
        return view('admin.education.manage', [
            'degrees'=>Education::all()
        ]);
    }
    public function edit($id){
        return view('admin.education.edit', [
            'degree'=>Education::find($id)
        ]);
    }
    public function update(Request $request){
        Education::addOrUpdate($request);
        return redirect('education/manage')->with('message', 'Education Degree Info Updated Successfully');
    }
    public function remove(Request $request){
        Education::remove($request->id);
        return back()->with('message', 'Education Degree Removed Successfully');
    }
}
