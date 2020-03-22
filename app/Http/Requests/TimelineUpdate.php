<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimelineUpdate extends FormRequest
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
          'title_en'=>'required|max:190|string|unique:timelines,title_en'.$this->route('timeline')->id,
          'title_ar'=>'required|max:190|string|unique:timelines,title_ar'.$this->route('timeline')->id,
          'description_ar'=>'required|string',
          'description_en'=>'required|string',
          'date'=>'required|string',
        ];
    }
}
