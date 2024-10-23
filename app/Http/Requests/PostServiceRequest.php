<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostServiceRequest extends FormRequest
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
            'service_name' => ['required', 'string', 'max:255', Rule::unique('services')->ignore($this->route()->parameter('service'))],
            'service_description' => ['required', 'string', Rule::unique('services')->ignore($this->route()->parameter('service'))],
            'estimated_duration' => 'sometimes|nullable|date_format:H:i:s',
            'is_active' => 'boolean',
        ];
    }

    protected function prepareForValidation()
    {
        return $this->merge([
            'is_active' => filter_var($this->is_active, FILTER_VALIDATE_BOOLEAN),
        ]);
    }
}
