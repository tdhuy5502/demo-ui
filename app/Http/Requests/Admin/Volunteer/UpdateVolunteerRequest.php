<?php

namespace App\Http\Requests\Admin\Volunteer;

use Closure;
use App\Models\Volunteer;
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
                function (string $attribute ,mixed $value , Closure $fail)
                {
                    $email = Volunteer::where('email','=',$value)
                    ->where('id','!=',$this->route()->id)
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
