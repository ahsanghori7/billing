<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadGenerationRequest extends FormRequest
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
        return [
            'username' => 'required',
            'password' => 'required',
            'msisdn' => 'required'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.required' => 'Username is required!',
            'password.required' => 'Password is required!',
            'msisdn.required' => 'MSISDN is required!'

        ];
    }
}
