<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperatorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules  = [
            'country_id' => 'nullable|numeric'
        ];

        if ($this->isMethod('post') || $this->isMethod('put')) {
            $rules['operator_code'] = 'required|numeric';
            $rules['operator_name'] = 'required';
            $rules['provider_id'] = 'required|numeric';
            $rules['status'] = 'required|numeric';
        }

        return $rules ;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'country_id.required' => 'Country id is required!',
            'operator_code.required' => 'Operator code is required!',
            'operator_name.required' => 'Operator name is required!',
            'provider_id.required' => 'Provider id code is required!',

        ];
    }
}
