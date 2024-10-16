<?php

namespace App\Http\Requests\Admin\Donation;

use Illuminate\Foundation\Http\FormRequest;

class StoreDonationRequest extends FormRequest
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
            'donator_name' => 'required|max:255',
            'project_id' => 'required',
            'amount' => 'required|numeric',
            'message' => 'sometimes'
        ];
    }
}
