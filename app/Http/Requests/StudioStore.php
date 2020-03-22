<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudioStore extends FormRequest
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
          'name_en'=>'required|max:190|string|unique:studios',
          'name_ar'=>'required|max:190|string|unique:studios',
          'slug'=>'max:190|string|unique:studios',
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
