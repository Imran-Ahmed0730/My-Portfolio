<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    private static $education;
    public static function addOrUpdate($request){
        if(Training::find($request->id)){
            self::$education = Education::find($request->id);
        }
        else{
            self::$education = new Education();
        }
        self::$education->degree_name   = $request->name;
        self::$education->institution   = $request->institution;
        self::$education->Year          = $request->year;
        self::$education->result        = $request->result;
        self::$education->grade_point   = $request->grade_point;

        self::$education->save();
    }

    public static function remove($id){
        self::$education = Education::find($id);
        self::$education->delete();
    }
}
