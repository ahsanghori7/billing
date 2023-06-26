<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessagesResource extends JsonResource
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
            'text' => $this->text,
            'free_text' => $this->free_text,
            'exit_text' => $this->exit_text,
            'shortcode' => $this->shortcode,
            'type' => $this->type,
            'subservice_name' => $this->subService->subservice_name,

        ];
    }
}
