<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteMapUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'title_ar'=>'required|max:190|string|unique:site_maps,title_ar,'.$this->route('siteMap')->id,
          'title_en'=>'required|max:190|string|unique:site_maps,title_en,'.$this->route('siteMap')->id,
          'link'=>'required|max:190|string|unique:site_maps,link,'.$this->route('siteMap')->id,

        ];
    }
}
