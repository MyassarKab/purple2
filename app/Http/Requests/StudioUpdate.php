<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudioUpdate extends FormRequest
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
          'name_en'=>'required|max:190|string|unique:studios,name_en,'.$this->route('studio')->id,
          'name_ar'=>'required|max:190|string|unique:studios,name_ar,'.$this->route('studio')->id,
          'slug'=>'max:190|string|unique:studios,slug,'.$this->route('studio')->id,
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
