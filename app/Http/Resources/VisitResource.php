<?php

namespace App\Http\Resources;

use App\Helper;
use Illuminate\Http\Resources\Json\JsonResource;

class VisitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'link_id' => $this->link_id,
            'ip_address' => $this->ip_address,
            'country' => $this->country,
            'refereer_url' => $this->refereer_url,
            'link' => new LinkResource($this->link),
            'created_at' => Helper::formatDate($this->created_at),
            'updated_at' => Helper::formatDate($this->updated_at),
        ];
    }
}
