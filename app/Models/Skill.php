<?php

namespace App\Models;

use App\Http\Controllers\SkillController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    private static $skill;
    public static function addOrUpdate($request){
        if(Skill::find($request->id)){
            self::$skill = Skill::find($request->id);
        }
        else{
            self::$skill = new Skill();
        }
        self::$skill->name          = $request->name;
        self::$skill->skill_type   = $request->skill_type;
        self::$skill->description       = $request->description;

        self::$skill->save();
    }

    public static function remove($id){
        self::$skill = Skill::find($id);
        self::$skill->delete();
    }
}
