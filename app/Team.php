<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
  protected $fillable = [
      'name_en', 'position_en','image','name_ar','position_ar',
  ];
  public function setImageAttribute($photo)
 {
    if ($photo) {
      $destinationPath='upload/Team/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/Team/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
 }
}
