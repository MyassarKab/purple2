<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdPortfolioImageUpdate extends FormRequest
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
          'ad_portfolio_id'=>'required|numeric|digits_between:1,5',
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
