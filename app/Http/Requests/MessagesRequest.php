<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessagesRequest extends FormRequest
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
            'subservice_id' => 'nullable|numeric',
        ];

        if ($this->isMethod('post') || $this->isMethod('put')) {
            $rules['text'] = 'required';
            $rules['exit_text'] = 'required';
            $rules['shortcode'] = 'required|numeric';
            $rules['shortcode'] = 'required|numeric';
        }
        return $rules;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'subservice_id.required' => 'subservice id is required!',
            'text.required' => 'Text id is required!',
            'exit_text.required' => 'GoodBye Message is required!',
            'shortcode.required' => 'Shortcode id is required!',
            'type.required' => 'Type is required!',
        ];
    }
}
