<?php

namespace App\Http\Requests\Admin\Member;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'id' => 'exists:members,id',
            'name' => 'required',
            'phone' => [
                'required',
                'min:10','max:15',
                'regex: /^\d{10,15}$/',
                Rule::unique('members')->where(function ($query) {
                    return $query->where('id', '!=' , $this->route()->id)
                    ->whereNull('deleted_at');
                }),
            ],
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                Rule::unique('members')->where(function ($query) {
                    return $query->where('id', '!=' ,$this->route()->id)
                    ->whereNull('deleted_at');
                }),
            ],
            'role_id' => 'sometimes',
            'avatar' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Please enter member`s name ',
            'phone.required' => 'Please enter phone numbers',
            'phone.min' => 'Invalid phone numbers length',
            'phone.max' => 'Invalid phone numbers length',
            'phone.regex' => 'Invalid phone numbers format',
            'phone.unique' => 'Phone numbers already in use',
            'email.required' => 'Please enter email',
            'email.regex' => 'Invalid email format',
            'email.unique' => 'This email already in use'
        ];
    }
}
