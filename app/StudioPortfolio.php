<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudioPortfolio extends Model
{
    protected $table = 'studio_portfolios';
  protected $fillable = [
     'image','studio_id'
  ];
  public function setImageAttribute($photo)
  {
    if ($photo) {
       $destinationPath='upload/StudioPortfolio/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/StudioPortfolio/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
  }



  public function Studio()
  {
    return $this->belongsTo('App\Studio');
  }


}
