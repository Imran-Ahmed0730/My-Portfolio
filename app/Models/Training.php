<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    private static $certification;

    public static function addOrUpdate($request){
        if(Training::find($request->id)){
            self::$certification = Training::find($request->id);
        }
        else{
            self::$certification = new Training();
        }
        self::$certification->name          = $request->name;
        self::$certification->institution   = $request->institution;
        self::$certification->address       = $request->address;
        self::$certification->starting_date = $request->starting_date;
        self::$certification->ending_date   = $request->ending_date;

        self::$certification->save();
    }

    public static function remove($id){
        self::$certification = Training::find($id);
        self::$certification->delete();
    }
}
