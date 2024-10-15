<?php

namespace App\Http\Requests\Admin\Member;

use Closure;
use App\Models\Member;
use Illuminate\Validation\Rule;
use Symfony\Component\Console\Input\Input;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
            //if count > 0 -> exists
            // Eloquent laravel & validation

            'name' => [
                'required',
                function (string $attribute, mixed $value, Closure $fail) {
                    $name = Member::where('name', '=', $value)->pluck('name')->first();
                    if ($value === $name) {
                        $fail("The {$attribute} is invalid.");
                    }
                },
            ],
            'phone' => [
                'required',
                'min:10','max:15',
                'regex: /^\d{10,15}$/',
                Rule::unique('members')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
            'email' => [
                'required',
                'email', 
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                Rule::unique('members')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
            'role_id' => 'sometimes|numeric',
            'avatar' => 'nullable'
        ];
    }

   
}
