<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    private static $otherImage, $imageName, $directory, $imageUrl;
    public static function saveImageUrl($images, $id, $folderName){
        foreach ($images as $image){
            self::$otherImage = new ProjectImage();
            self::$otherImage->project_id = $id;
            self::$otherImage->other_image = self::saveImage($image, $folderName);
            self::$otherImage->save();
        }
    }

    private static function saveImage($image, $pathFolder){
        self::$imageName = $pathFolder. '-'. rand(). '.' . $image->extension();
        self::$directory = 'admin-assets/uploaded-images/Project/'.$pathFolder.'/other_images/';
        self::$imageUrl = self::$directory.self::$imageName;
        $image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }
    public static function updateImage($images, $id, $folderName){
        if($images){
            self::deleteImages($id);
            self::saveImageUrl($images, $id, $folderName);
        }
    }

    public static function deleteImages($id){
        self::$otherImage = ProjectImage::where('project_id', $id)->get();
        foreach (self::$otherImage as $item){
            if (file_exists($item->other_image)){
                unlink($item->other_image);
                $item->delete();
            }
        }
    }
}
