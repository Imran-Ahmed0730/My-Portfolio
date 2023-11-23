<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request){
        Review::add($request);
        return back();
    }
    public function manage(){
        return view('admin.review.manage', [
            'reviews'=>Review::all()->sortByDesc('id')
        ]);
    }
    public function status($id){
        Review::changeStatus($id);
        return back()->with('message', 'Status Changed Successfully!!');
    }
    public function remove(Request $request){
        Review::remove($request->id);
        return back()->with('message', 'Review Removed Successfully!!');
    }
}
