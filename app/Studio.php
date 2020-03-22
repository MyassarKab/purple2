<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $table = 'studios';
  protected $fillable = [
      'name_en', 'name_ar','image','slug'
  ];
  public function setImageAttribute($photo)
 {
    if ($photo) {
      $destinationPath='upload/Studio/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/Studio/".$filename;
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
