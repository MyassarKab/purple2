<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsStore extends FormRequest
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
          'title_en'=>'required|max:190|string|unique:news',
          'title_ar'=>'required|max:190|string|unique:news',
          'description_ar'=>'required|string',
          'description_en'=>'required|string',
          'details_en'=>'required|string',
          'details_ar'=>'required|string',
       
          'slug'=>'required|max:190|string|unique:news',
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
