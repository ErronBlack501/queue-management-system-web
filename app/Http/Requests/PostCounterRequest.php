<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostCounterRequest extends FormRequest
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
            'counter_number' => ['required', 'string', 'numeric', Rule::unique('counters')->ignore($this->route()->parameter('counter'))],
            'counter_status' => 'required|in:open,closed,suspended',
            'service_id' => 'required|exists:services,id',
        ];
    }

    protected function prepareForValidation()
    {
        return $this->merge([
            'service_id' => (int)$this->service_id,
        ]);
    }
}
