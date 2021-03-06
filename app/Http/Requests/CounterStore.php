<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounterStore extends FormRequest
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
          'name_en'=>'required|max:190|string|unique:counters',
          'name_ar'=>'required|max:190|string|unique:counters',
          'number'=>'required|max:190|string',
          'image'=>'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
