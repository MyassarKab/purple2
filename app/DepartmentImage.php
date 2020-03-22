<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentImage extends Model
{
  protected $table = 'department_images';
  protected $fillable = [
      'image','department_id'
  ];

  public function setImageAttribute($photo)
  {
    if ($photo) {
      $destinationPath='upload/Department/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/DepartmentImages/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
  }



  public function Department()
  {
    return $this->belongsTo('App\Department');
  }
}
