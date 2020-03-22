<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounterUpdate extends FormRequest
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
          'name_en'=>'required|max:190|string|unique:counters,name_en,'.$this->route('counter')->id,
          'name_ar'=>'required|max:190|string|unique:counters,name_ar,'.$this->route('counter')->id,
          'number'=>'required|max:190|string',
          'image'=>'required|image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
