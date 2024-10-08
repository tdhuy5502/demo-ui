<?php

namespace App\Http\Requests\Admin\News;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'id' => 'exists:news,id',
            'title' => 'required|max:255',
            'content' => 'required',
            'subtitle' => 'sometimes|max:255',
            'image' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter the title',
            'content.required' => 'Please enter the content',
            'title.max' => 'Oversize content',
            'subtitle.max' => 'Oversize content',
        ];
    }
}
