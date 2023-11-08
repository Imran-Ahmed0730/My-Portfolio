<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    private static $message;
    public static function add($request){
        self::$message               = new Message();
        self::$message->name         = $request->name;
        self::$message->email        = $request->email;
        self::$message->message      = $request->message;
        self::$message->save();
    }

    public static function changeStatus($id){
        self::$message = Review::find($id);
        if(self::$message->status == 0){
            self::$message->status = 1;
        }
        else{
            self::$message->status = 0;
        }
        self::$message->save();
    }
    public static function remove($id){
        self::$message = Message::find($id);
        self::$message->delete();
    }
}
