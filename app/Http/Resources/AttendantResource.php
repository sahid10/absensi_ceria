<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // $jml_jam_kerja= 
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'date' => $this->date,
            'check_in_time' => $this->check_in_time,
            'check_out_time' => $this->check_out_time
        ];
    }
}
