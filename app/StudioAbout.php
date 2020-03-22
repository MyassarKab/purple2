<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudioAbout extends Model
{
    protected $table = 'studio_abouts';
  protected $fillable = [
      'title_en', 'title_ar','image','description_ar','description_en'
  ];

  public function setImageAttribute($photo)
 {
    if ($photo) {
      $destinationPath='upload/StudioAbout/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/StudioAbout/".$filename;
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
