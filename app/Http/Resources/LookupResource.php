<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LookupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'id' => $this->ID,
            'msisdn' => $this->msisdn,
            'pin' => $this->pin,
            'subscription_date' => $this->Subdate,
            'subservice_name' => $this->subService->subservice_name,
            'shortcode' => $this->subService->shortcode,
            'free_shortcode' => $this->subService->free_shortcode,
            'content_group_name' => $this->contentGroup->name,

        ];
    }
}
