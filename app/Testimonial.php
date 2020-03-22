<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
  //
  protected $fillable = [
      'name_en', 'name_ar','image','description_ar','description_en','position_en','position_ar'
  ];

  public function setImageAttribute($photo)
 {
    if ($photo) {
        $destinationPath='upload/Testimonial/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/Testimonial/".$filename;
      $photo->move(  $destinationPath, $filename);
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
