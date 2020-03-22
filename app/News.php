<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
  protected $fillable = [
      'title_en','title_ar','image','description_ar','description_en','details_en','details_ar','slug'
  ];

  public function setImageAttribute($photo)
 {
    if ($photo) {
      $destinationPath='upload/Department/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/News/".$filename;
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
