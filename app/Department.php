<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
  protected $fillable = [
      'title_en', 'title_ar','image','description_ar','description_en','details_en','details_ar','schedule','slug'
  ];

  public function setImageAttribute($photo)
 {
    if ($photo) {
      $destinationPath='upload/Department/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/Department/".$filename;
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
