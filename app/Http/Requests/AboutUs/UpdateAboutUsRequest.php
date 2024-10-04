<?php

namespace App\Http\Requests\AboutUs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'id' => 'exists:about_us,id',
            'title' => 'required',
            'content' => 'required|max:255',
            'image' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter title',
            'content.required' => 'Please enter content',
            'content.max' => 'Content max character is 255',
        ];
    }
}
