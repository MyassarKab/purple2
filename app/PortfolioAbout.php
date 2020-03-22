<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PortfolioAbout extends Model
{
    protected $table = 'portfolio_abouts';
    //
    protected $fillable = [
        'title_en', 'title_ar','image','description_ar','description_en'
    ];

    public function setImageAttribute($photo)
   {
      if ($photo) {
        $destinationPath='upload/Department/';
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $path="/upload/PortfolioAbout/".$filename;
        $photo->move($destinationPath, $filename);
        $this->attributes['image']=$path;

      }
   }

   public function TextTrans($text)
  {
      $locale=\App::getLocale();
      $column=$text.'_'.$locale;

      return $this->{$column};
  }
}
