<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IntegrationResource extends JsonResource
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
            'integration_file' => $this->integration_file,
            'subscribe_url' => $this->subscribe_url,
            'send_pin_url' => $this->send_pin_url,
            'provider' => $this->provider ? $this->provider->Provider : null,
            'provider_id' => $this->Provider_id,

        ];
    }
}
