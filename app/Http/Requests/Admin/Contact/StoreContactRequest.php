<?php

namespace App\Http\Requests\Admin\Contact;

use Closure;
use App\Models\ClientContact;
use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                function (string $attribute,mixed $value,Closure $fail)
                {
                    $email = ClientContact::where('email','=',$value)->pluck('email')->first();

                    if ($value === $email) {
                        $fail("The {$attribute} is already in use.");
                    }
                }
            ],
            'subject' => 'required',
            'message' => 'required'
        ];
    }
}
