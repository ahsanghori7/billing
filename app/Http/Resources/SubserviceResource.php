<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubserviceResource extends JsonResource
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
            'subservice_name' => $this->subservice_name,
            'operator_id' => $this->operator->id,
            'operator_name' => $this->operator->operator_name,
            'country_name' => $this->country->country_name,
            'service' => $this->service->service,
            'shortcode' => $this->shortcode,
            'pincode_length' => $this->pincode_length,
            'success_url' => $this->success_url,
            'failed_url' => $this->failed_url,
            'notify_url' => $this->notify_url,
            'pinenabled' => $this->pinenabled,
            'content_schedule' => $this->content_schedule,
            'free_content_schedule' => $this->free_content_schedule,
            'integration' => $this->integration->integration_file,
            'looping_content' => $this->looping_content,
            'welcome_enabled' => $this->welcome_enabled,
            'instant_content' => $this->instant_content,
            'pin_style_id' => $this->pin_style_id,
            'free_shortcode' => $this->free_shortcode,
            'content_starttime' => $this->content_starttime,
            'timestamp' => $this->timestamp,
            'free_trial' => $this->free_trial,
            'status' => $this->status,

        ];
    }
}
