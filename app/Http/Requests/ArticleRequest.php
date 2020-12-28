<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|unique:articles|min:4|max:255',
            'image' => 'required|file|mimes:jpg, png, web',
            'en_image' => 'required|file|mimes:jpg, png, web',
            'file' => 'required|mimes:pdf',
            'en_file' => 'required|mimes:pdf',
        ];
    }
}
