<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdPortfolioImage extends Model
{

  protected $fillable = [
     'image','ad_portfolio_id'
  ];

  public function setImageAttribute($photo)
  {


    if ($photo) {
      $destinationPath='upload/AdPortfolioImage/';
      $filename = rand(3,5).'.'.$photo->getClientOriginalExtension();
      $path="/upload/AdPortfolioImage/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

    }
  }


  public function AdPortfolio()
  {
    return $this->belongsTo('App\AdPortfolio');
  }
}
