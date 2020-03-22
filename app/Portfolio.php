<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name_en', 'name_ar','imagePhone',
  ];


  public function PortfolioImage()
  {
    return $this->hasMany('App\PortfolioImage');
  }

  public function TextTrans($text)
 {
     $locale=\App::getLocale();
     $column=$text.'_'.$locale;

     return $this->{$column};
 }
}
