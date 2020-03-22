<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdate extends FormRequest
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
          'name_ar'=>'required|max:190|string|unique:testimonials,name_ar,'.$this->route('testimonial')->id,
          'name_en'=>'required|max:190|string|unique:testimonials,name_en,'.$this->route('testimonial')->id,
          'description_ar'=>'required|string',
          'description_en'=>'required|string',
          'position_ar'=>'required|max:190|string',
          'position_en'=>'required|max:190|string',
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
