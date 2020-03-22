<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactInfoUpdate extends FormRequest
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
          'name_ar'=>'required|max:190|string',
          'name_en'=>'required|max:190|string',
          'map'=>'required|string',
          'email'=>'required|string|email|max:190',
          'phone1'=>'required|max:190|string',
          'phone2'=>'required|max:190|string',
          'phone3'=>'required|max:190|string',
        ];
    }
}
