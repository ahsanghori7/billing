<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OperatorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->id,
            'country_name' => $this->country->country_name,
            'operator_code' => $this->operator_code,
            'operator_name' => $this->operator_name,
            'provider_id' => $this->provider_id,
            'shortcode' => $this->shortcode,

        ];
    }
}
