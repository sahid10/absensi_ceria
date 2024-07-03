<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendantDetailResource extends JsonResource
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
            'user_id' => $this->user_id,
            'date' => $this->date,
            'check_in_time' => $this->check_in_time,
            'check_out_time' => $this->check_out_time,
            'shift_id' => $this->shift_id,
            'status' => $this->status,
            'notes' => $this->notes,
            'user' => $this->whenLoaded('user')
        ];
    }
}
