<?php

namespace App\Http\Resources\Api\V1\Customer;



use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'                    => $this->name,
            "mobile"                  => $this->mobile,
            "status"                  => $this->status,
            "complete_info"           => $this->complete_info,
            "bank_account_number"     => $this->bank_account_number,
            "created_at"              => $this->created_at,
        ];
    }
}
