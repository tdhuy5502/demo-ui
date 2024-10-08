<?php

namespace App\Http\Requests\Admin\Project;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'id' => 'exists:projects,id',
            'title' => 'required|max:255',
            'content' => 'required',
            'people_joined' => 'required|numeric',
            'donated_qty' => 'sometimes|numeric',
            'result' => 'sometimes|max:255'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please enter the title',
            'title.max' => 'Oversize tilte',
            'content.required' => 'Please enter the content',
            'people_joined.required' => 'Please enter people quantity',
            'people_joined.numeric' => 'Invalid format',
            'result.sometimes' => 'Please enter the result',
            'result.max' => 'Oversize content'
        ];
    }
}
