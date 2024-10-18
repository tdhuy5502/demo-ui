<?php

namespace App\Http\Requests\Admin\Volunteer;

use App\Models\Volunteer;
use Closure;
use Illuminate\Foundation\Http\FormRequest;

class StoreVolunteerRequest extends FormRequest
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
                function (string $attribute ,mixed $value , Closure $fail)
                {
                    $email = Volunteer::where('email','=',$value)
                    ->pluck('email')->first();

                    if($email == $value)
                    {
                        $fail("The {$attribute} is already in use");
                    }
                }
            ],
            'project_id' => 'required',
            'message' => 'sometimes'
        ];
    }
}
