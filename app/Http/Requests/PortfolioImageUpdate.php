<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioImageStore extends FormRequest
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
          'title_en'=>'required|max:190|string|unique:portfolio_images,title_en,'.$this->route('portfolioImage')->id,
          'title_ar'=>'required|max:190|string|unique:portfolio_images,title_ar,'.$this->route('portfolioImage')->id,
          'slug'=>'max:190|string|unique:portfolio_images,slug,'.$this->route('portfolioImage')->id,
          'portfolio_id'=>'required|numeric|digits_between:1,5',
          'image'=>'image|mimes:jpg,jpeg,bmp,png,svg,gif|max:20000',
        ];
    }
}
