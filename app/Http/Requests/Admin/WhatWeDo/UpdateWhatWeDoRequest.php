<?php

namespace App\Http\Requests\Admin\WhatWeDo;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWhatWeDoRequest extends FormRequest
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
            'id' => 'exists:what_we_dos,id',
            'title' => 'required',
            'subtitle' => 'required|max:255'
        ];
    }
}
