<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    protected $table = 'portfolio_images';
  protected $fillable = [
     'image','portfolio_id','slug','title_en','title_ar','width','height'
  ];
  public function setImageAttribute($photo)
  {
    if ($photo) {
      $destinationPath='upload/Department/';
      $filename = time().'.'.$photo->getClientOriginalExtension();
      $path="/upload/PortfolioImages/".$filename;
      $photo->move($destinationPath, $filename);
      $this->attributes['image']=$path;

      // $FullPath=url("{$path}");
        // $FullPath=asset($path);

      // $data = getimagesize($FullPath);
      // $width = $data[0];
      // $height = $data[1];
      // $this->setWidthAttribute($width);
      // $this->setHeightAttribute($height);
    }
  }

  // public function setWidthAttribute($value){
  //   $this->attributes['width']=$value;
  // }
  // public function setHeightAttribute($value){
  //   $this->attributes['height']=$value;
  // }

  public function Portfolio()
  {
    return $this->belongsTo('App\Portfolio');
  }

  public function TextTrans($text)
 {
     $locale=\App::getLocale();
     $column=$text.'_'.$locale;

     return $this->{$column};
 }
}
