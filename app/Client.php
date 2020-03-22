<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = [
     'image','name_en','name_ar'
  ];

  public function setImageAttribute($photo)
  {
    if ($photo) {
      $destinationPath='upload/Client/';
      $filename = rand(3,5).'.'.$photo->getClientOriginalExtension();
      $path="/upload/Client/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
  }
}
