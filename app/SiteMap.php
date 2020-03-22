<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteMap extends Model
{
    protected $table = 'site_maps';
  protected $fillable = [
      'title_en', 'title_ar','link'
  ];

  public function TextTrans($text)
 {
     $locale=\App::getLocale();
     $column=$text.'_'.$locale;

     return $this->{$column};
 }


}
