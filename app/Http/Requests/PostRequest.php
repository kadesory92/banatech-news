<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => ['required','integer'],
            'title' => ['required','string', 'max:255'],
            'slug' => ['required','string', 'max:255'],
            'content' => ['required'],
            'image' => ['mimes:jpeg,jpg,png,gif'],
            'is_featured' => ['nullable'],
            'is_published' => ['nullable'],
            'tag_id' => ['integer'],
            //
        ];
    }
}
