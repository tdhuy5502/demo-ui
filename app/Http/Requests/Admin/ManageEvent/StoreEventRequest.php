<?php

namespace App\Http\Requests\Admin\ManageEvent;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'name' => 'required|max:255',
            'destination' => 'sometimes|max:255',
            'content' => 'required|max:900',
            'date' => 'required|date_format:Y-m-d'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter name',
            'name.max' => 'Name too long',
            'destination.sometimes' => 'Please enter destination',
            'destination.max' => 'Address too long',
            'content.required' => 'Please enter content',
            'date.required' => 'Please choose the date',
            'date.date_format' => 'Invalid date format',
        ];
    }
}
