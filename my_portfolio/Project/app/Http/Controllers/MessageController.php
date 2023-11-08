<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request){
//        return $request;
        Message::add($request);
        return back();
    }
    public function manage(){
        return view('admin.message.manage', [
            'messages'=>Message::all()
        ]);
    }

    public function status($id){
        Message::changeStatus($id);
        return back()->with('message', 'Status Changed Successfully!!');
    }
    public static function changeStatus($id){
        self::$message = Message::find($id);
        if(self::$message->status == 0){
            self::$message->status = 1;
        }
        else{
            self::$message->status = 0;
        }
        self::$message->save();
    }
    public function remove(Request $request){
        Message::remove($request->id);
        return back()->with('message', 'Review Removed Successfully!!');
    }
}
