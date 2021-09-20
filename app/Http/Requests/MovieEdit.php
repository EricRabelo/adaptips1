<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieEdit extends FormRequest
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
            'title' => 'required|max:255|string',
            'genre' => 'required|max:255|string',
            'release' => 'required|max:255|string',
            'synopsis' => 'required|max:1000|string',
            'rating' => 'required|max:255|string',
            'image' => 'image',
            'country_id' => 'required|numeric'
        ];
    }
}
