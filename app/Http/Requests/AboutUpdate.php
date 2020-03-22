<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdate extends FormRequest
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
          'manegarName_en'=>'required|max:190|string',
          'manegarName_ar'=>'required|max:190|string',
          'vision_en'=>'required|string',
          'mission_en'=>'required|string',
          'message_en'=>'required|string',
          'manegarText_en'=>'required|string',
          'vision_ar'=>'required|string',
          'mission_ar'=>'required|string',
          'message_ar'=>'required|string',
          'manegarText_ar'=>'required|string',
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
