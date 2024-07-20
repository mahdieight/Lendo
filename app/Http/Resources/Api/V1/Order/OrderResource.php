<?php

namespace App\Http\Resources\Api\V1\Order;

use App\Http\Resources\Api\V1\Customer\CustomerResource;
use App\Http\Resources\CollectionWithoutPaginate;
use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "unique_id"               => $this->unique_id,
            "amount"                  => $this->amount,
            "invoice_count"           => $this->invoice_count,
            "status"                  => $this->status,
            'customer'                => new CustomerResource( $this->customer),
            "created_at"              => $this->created_at,
        ];
    }
}
