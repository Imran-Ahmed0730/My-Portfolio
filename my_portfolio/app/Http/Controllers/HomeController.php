<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home', [
            'projects'=>Project::all()->sortBy('id')
        ]);
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
