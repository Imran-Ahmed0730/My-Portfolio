<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index(){
        return view('admin.skill.add');
    }
    public function add(Request $request){
//        return $request;
        Skill::addOrUpdate($request);
        return redirect('skill/manage')->with('message', 'Skill Added Successfully');
    }
    public function manage(){
        return view('admin.skill.manage', [
            'skills'=>Skill::all()
        ]);
    }
    public function edit($id){
        return view('admin.skill.edit', [
            'skill'=>Skill::find($id)
        ]);
    }
    public function update(Request $request){
        Skill::addOrUpdate($request);
        return redirect('skill/manage')->with('message', 'Skill Updated Successfully');
    }
    public function remove(Request $request){
        Skill::remove($request->id);
        return back()->with('message', 'Skill Removed Successfully');
    }
}
