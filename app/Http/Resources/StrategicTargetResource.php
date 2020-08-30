<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StrategicTargetResource extends JsonResource
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
            'id'    => $this->id,
            'kode'  => $this->kode,
            'name'  => $this->name,
            'kementrian' => MinistryResource::collection($this->ministrys),
            'programTarget' => ProgramTargetResource::collection($this->programTargets)
        ];
    }
}
