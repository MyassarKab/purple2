<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
  protected $fillable = [
      'title_en', 'title_ar','image','description_ar','description_en','imagePhone',
  ];

  public function setImageAttribute($photo)
 {
    if ($photo) {
        $destinationPath='upload/Services/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/Services/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
 }
 public function setImagePhoneAttribute($photo)
{
   if ($photo) {
       $destinationPath='upload/Services/';
     $filename = str_random(5).'.'.$photo->getClientOriginalExtension();
     $path="/upload/Services/".$filename;
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
