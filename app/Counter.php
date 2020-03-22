<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $table = 'counters';
  protected $fillable = [
      'name_en', 'number','image','name_ar',
  ];
  public function setImageAttribute($photo)
 {
    if ($photo) {
      $destinationPath='upload/Counter/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/Counter/".$filename;
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
