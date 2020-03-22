<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamUpdate extends FormRequest
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
          'name_en'=>'required|max:190|string|unique:teams,name_en,'.$this->route('team')->id,
          'name_ar'=>'required|max:190|string|unique:teams,name_ar,'.$this->route('team')->id,
          'position_en'=>'required|max:190|string|unique:teams,position_en,'.$this->route('team')->id,
          'position_ar'=>'required|max:190|string|unique:teams,position_ar,'.$this->route('team')->id,
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
