<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    private static $project, $imageFolder;

    public static function addOrUpdate($request){
        if(Project::find($request->id)){
            self::$project = Project::find($request->id);
        }
        else{
            self::$project = new Project();
        }
        self::$imageFolder = 'Project/'.$request->title;
        if ($request->file('image')){
            if (self::$project->image){
                if (file_exists(self::$project->image)){
                    unlink(self::$project->image);
                }
                self::$project->image = saveImageUrl($request, self::$imageFolder);
            }
            else{
                self::$project->image = saveImageUrl($request, self::$imageFolder);
            }
        }
        self::$project->project_type    = $request->project_type;
        self::$project->title           = $request->title;
        self::$project->description     = $request->description;
        self::$project->project_url     = $request->project_url;
        self::$project->frontend        = $request->frontend;
        self::$project->backend         = $request->backend;
        self::$project->status          = $request->status;
        self::$project->others          = $request->others;
        self::$project->client_id       = $request->client_id;

        self::$project->save();
        return self::$project;
    }

    public static function remove($id){
        self::$project = Project::find($id);
        if (self::$project->image){
            unlink(self::$project->image);

        }
        self::$project->delete();
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function projectImage(){
        return $this->hasMany(ProjectImage::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
}
