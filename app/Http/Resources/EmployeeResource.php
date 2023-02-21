<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Enums\EmployeePosition;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'position' => EmployeePosition::AllowableValues[$this->position],
            'create_date' => $this->created_at->format('Y-m-d'),
            'can_update' => $this->can_update,
            'can_delete' => $this->can_delete,

        ];
    }

}
