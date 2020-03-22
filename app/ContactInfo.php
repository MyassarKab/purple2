<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
  protected $table = 'contact_infos';
    protected $fillable = [
        'name_en','name_ar','map','email','phone1','phone2','phone3',''
    ];

    public function TextTrans($text)
   {
       $locale=\App::getLocale();
       $column=$text.'_'.$locale;

       return $this->{$column};
   }

}
