<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
  protected $table = 'abouts';
  protected $fillable = [
      'vision_en', 'mission_en','message_en','manegarText_en','manegarName_en','vision_ar','mission_ar','message_ar','manegarText_ar','manegarName_ar','image'
  ];

  public function setImageAttribute($photo)
  {
    if ($photo) {
      $destinationPath='upload/About/';
      $filename = rand(3,5).'.'.$photo->getClientOriginalExtension();
      $path="/upload/About/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
  }
  public function TextTrans($text)
 {
     $locale=\App::getLocale();
     $column=$text.'_'.$locale;

     return $this->{$column};
 }
}
