<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    private static $client, $imageFolder;

    public static function addOrUpdate($request){
        if(Client::find($request->id)){
            self::$client = Client::find($request->id);
        }
        else{
            self::$client = new Client();
        }
        self::$client->name         = $request->name;
        self::$client->email        = $request->email;
        self::$client->address      = $request->address;
        self::$client->phone_number = $request->phone_number;
        self::$client->project_id   = $request->project_id;

        self::$client->save();
    }

    public static function remove($id){
        self::$client = Client::find($id);
        self::$client->delete();
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
}
