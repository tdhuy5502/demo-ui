<?php

namespace App\Http\Requests\Admin\HomeContent;

use App\Models\HomeContent;
use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeContentRequest extends FormRequest
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
            'id' => 'exists:home_contents,id',
            'key' => 'required',
            'value' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'Please enter Key',
            'value.required' => 'Please enter Content',
        ];
    }
}
