<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $project;
    public function index(){
        return view('admin.project.add', [
//            'clients'=>Client::all()
        ]);
    }
    public function add(Request$request){
//        return $request;
        $this->project = Project::addOrUpdate($request);
        ProjectImage::saveImageUrl($request->other_image, $this->project->id, $this->project->title);

        return redirect('project/manage')->with('message', 'Project Added Successfully');
    }
    public function manage(){
        return view('admin.project.manage', [
            'projects'=>Project::all()
        ]);
    }
    public function edit($id){
        return view('admin.project.edit', [
            'project'=>Project::find($id)
        ]);
    }
    public function update(Request $request){
        $this->project = Project::addOrUpdate($request,);
        ProjectImage::updateImage($request->other_image, $this->project->id, $this->project->title);
        return redirect('project/manage')->with('message', 'Project Info Updated Successfully');
    }
    public function remove(Request $request){
        Project::remove($request->id);
        ProjectImage::deleteImages($request->id);
        return back()->with('message', 'Project Removed Successfully');
    }
}
