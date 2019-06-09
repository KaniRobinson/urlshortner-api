<?php

namespace App\Http\Resources;

use App\Helper;
use Illuminate\Http\Resources\Json\JsonResource;

class LinkResource extends JsonResource
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
            'token' => $this->token,
            'link' => url($this->token),
            'url' => $this->url,
            'created_at' => Helper::formatDate($this->created_at),
            'updated_at' => Helper::formatDate($this->updated_at),
        ];
    }
}
