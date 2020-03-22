<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeAre extends Model
{
    protected $table = 'we_ares';
  protected $fillable = [
      'title_en', 'title_ar','description_ar','description_en'
  ];

  public function TextTrans($text)
 {
     $locale=\App::getLocale();
     $column=$text.'_'.$locale;

     return $this->{$column};
 }
}
