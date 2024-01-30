<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\RegionResource;

class AptekaResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'region' => RegionResource::make($this->region),
            'name' => $this->name,
            'address' => $this->address,
            'owner_name' => $this->owner_name,
            'owner_phone' => $this->owner_phone,
            'created_at' => $this->created_at,
            'updated_at' => $this->Updated_at,
        ];
    }
}
