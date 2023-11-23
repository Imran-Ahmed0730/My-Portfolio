<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Message;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;
use PhpParser\Comment;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.dashboard', [
            'projectCount'=>count(Project::all()),
            'projects'=>Project::all()->sortByDesc('id')->take(4),
            'clients'=>Client::all(),
            'comments'=>Review::all(),
            'messages'=>Message::all()->sortByDesc('id')->take(4)
        ]);
    }
}
