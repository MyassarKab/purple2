<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteMapStore extends FormRequest
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
          'title_ar'=>'required|max:190|string|unique:site_maps',
          'title_en'=>'required|max:190|string|unique:site_maps',
          'link'=>'required|max:190|string|unique:site_maps',

        ];
    }
}
