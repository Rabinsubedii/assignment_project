<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderFormRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:255'
            ],
            'description'=>[
                'required',
                'string',
                'max:800'
            ],
            'image'=>[
                'required',
                'string',
                'mimes:jpg,jpeg,png'
            ],
            'status'=>[
                'nullable',
        
            ],
        ];
    }
}
