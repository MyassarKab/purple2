<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdPortfolio extends Model
{
    protected $table = 'ad_portfolios';
  protected $fillable = [
      'name_en', 'name_ar',
  ];

  public function TextTrans($text)
 {
     $locale=\App::getLocale();
     $column=$text.'_'.$locale;

     return $this->{$column};
 }
}
