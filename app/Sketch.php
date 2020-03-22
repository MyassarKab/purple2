<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sketch extends Model
{
    protected $table = 'sketches';
  protected $fillable = [
     'sketch','final'
  ];
  public function setSketchAttribute($photo)
  {
    if ($photo) {
    $destinationPath='upload/Sketch/';
      $filename = time().'sketch.'.$photo->getClientOriginalExtension();
      $path="/upload/Sketch/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['sketch']=$path;

    }
  }

  // ---------------------------

  public function setFinalAttribute($photo)
  {
    if ($photo) {

      $filename = time().'finel.'.$photo->getClientOriginalExtension();
      $path="/upload/Sketch/".$filename;
      $photo->move(public_path('/upload/Sketch'), $filename);
      $this->attributes['final']=$path;

    }
  }

  // ---------------------------

}
