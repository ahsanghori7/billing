<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubserviceRequest extends FormRequest
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
            'subservice_name' => 'required',
            'operators_id' => 'required',
            'country_id' => 'required',
            'service_id' => 'required',
            'shortcode' => 'required',
            'pincode_length' => 'required',
            'pinenabled' => 'required',
            'content_schedule' => 'required',
            'integration_id' => 'required',
            'looping_content' => 'required',
            'welcome_enabled' => 'required',
            'instant_content' => 'required',
            'pin_style_id' => 'required',
            'free_shortcode' => 'required',
            'status' => 'required',
            'free_trial' => 'required',
            'is_consent' => 'required',
            'has_content' => 'required',
        ];
    }
}
