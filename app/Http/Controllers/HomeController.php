<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Project;
use App\Models\Review;
use App\Models\Skill;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home', [
            'projects'=>Project::where('status', 1)->get()->sortBy('id'),
            'degrees'=>Education::all()->sortByDesc('id'),
            'techSkills'=>Skill::where('skill_type', 1)->get(),
            'softSkills'=>Skill::where('skill_type', 2)->get(),
            'certifications'=> Training::all()->sortByDesc('id'),
            'reviews'=>Review::where('status', 1)->get()
        ]);
    }
    public function resume(){
        return view('front-end.resume.resume');
    }
    
    public function resumeDownload(){
        $file_path = public_path('Imran-Ahmed-CV.pdf');
        $file_name = 'Imran Ahmed Resume.pdf';

        return response()->download($file_path, $file_name);
    }
    
//    public function details($id){
////        return Project::find($id);
//        return view('front-end.project.details', [
//            'project'=>Project::find($id)
//        ]);
//    }
//    public function about(){
//        return view('front-end.about.about');
//    }
//    public function portfolio(){
//        return view('front-end.portfolio.portfolio',[
//            'projects'=>Project::all()
//        ]);
//    }
//    public function contact(){
//        return view('front-end.contact.contact');
//    }
}
