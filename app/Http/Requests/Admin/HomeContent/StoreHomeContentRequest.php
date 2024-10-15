<?php

namespace App\Http\Requests\Admin\HomeContent;

use App\Models\HomeContent;
use Closure;
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
            'key' => [
                'required',
                function (string $value, $attribute, Closure $fail)
                {
                    $keyName = HomeContent::where('key','=',$value)->pluck('key')->first();
                    if ($value === $keyName) {
                        $fail("The {$attribute} is already in use.");
                    }
                }
            ],
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
