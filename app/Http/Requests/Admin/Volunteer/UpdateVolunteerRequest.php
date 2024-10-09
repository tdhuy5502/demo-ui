<?php

namespace App\Http\Requests\Admin\Volunteer;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateVolunteerRequest extends FormRequest
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
            'id' => 'exixts:volunteers,id',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                Rule::unique('members')->where(function ($query) {
                    return $query->where('id', '!=' ,$this->route()->id)
                    ->whereNull('deleted_at');
                }),
            ],
        ];
    }
    
    public function messages()
    {
        return [
            'first_name.required' => 'Please enter first name',
            'last_name.required' => 'Please enter last name',
            'email.required' => 'Email cannot be blank',
            'email.regex' => 'Invalid email format',
            'email.unique' => 'This mail address already in use' 
        ];
    }
}
