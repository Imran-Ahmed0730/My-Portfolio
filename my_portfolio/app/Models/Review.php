<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    private static $review;
    public static function add($request){
        self::$review               = new Review();
        self::$review->project_id   = $request->project_id;
        self::$review->name         = $request->name;
        self::$review->email        = $request->email;
        self::$review->comment      = $request->comment;
        self::$review->save();
    }

    public static function changeStatus($id){
        self::$review = Review::find($id);
        if(self::$review->status == 0){
            self::$review->status = 1;
        }
        else{
            self::$review->status = 0;
        }
        self::$review->save();
    }
    public static function remove($id){
        self::$review = Review::find($id);
        self::$review->delete();
    }
}
