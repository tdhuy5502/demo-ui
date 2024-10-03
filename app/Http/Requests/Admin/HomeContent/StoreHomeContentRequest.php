<?php

namespace App\Http\Requests\Admin\HomeContent;

use Illuminate\Foundation\Http\FormRequest;

class StoreHomeContentRequest extends FormRequest
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
            'key' => 'required',
            'value' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'Key name required',
            'value.required' => 'Value is required'
        ];
    }
}
