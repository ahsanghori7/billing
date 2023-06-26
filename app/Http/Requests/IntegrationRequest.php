<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntegrationRequest extends FormRequest
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
            $rules['Provider_id'] = 'required|numeric';
            $rules['integration_file'] = 'required';
            $rules['enable_subscription'] = 'required';
            $rules['enable_free_content'] = 'required';
            $rules['enable_content'] = 'required';
            $rules['message_encoded'] = 'required';
            $rules['unique_by_sc'] = 'required';
            $rules['status'] = 'required';

            return $rules ;
    }
}
