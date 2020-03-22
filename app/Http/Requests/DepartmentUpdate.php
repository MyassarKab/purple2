<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentUpdate extends FormRequest
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
          'title_en'=>'required|max:190|string|unique:departments,title_en,'.$this->route('department')->id,
          'title_ar'=>'required|max:190|string|unique:departments,title_ar,'.$this->route('department')->id,
          'description_ar'=>'required|string',
          'description_en'=>'required|string',
          'details_en'=>'required|string',
          'details_ar'=>'required|string',
          'schedule'=>'required|numeric|digits_between:1,5',
          // 'slug'=>'required|max:190|string|unique:departments,slug,'.$this->route('department')->id,
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
