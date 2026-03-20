<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this-> id,
        'first_name' => $this-> first_name,
        'last_name'=> $this-> last_name,
        'midl_name'=> $this-> midl_name,
        'gender'=> $this-> gender,
        'phone'=> $this-> phone,
        'email'=> $this-> email,
        'hire_date'=> $this-> hire_date,
        'termination_date'=> $this-> termination_date,
        'status'=> $this-> status,
        'position_id'=> $this-> position_id,
        'department_id'=> $this-> department_id,
        ];
    }
}
