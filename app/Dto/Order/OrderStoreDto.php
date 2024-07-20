<?php

namespace App\Dto\Order;

use App\Contracts\DTO\DTOInterface;
use Illuminate\Support\Facades\Auth;

class OrderStoreDto implements DTOInterface
{
    public function __construct(
        public readonly int $amount,
        public readonly int $invoice_count,
        public readonly int $customer_id,

    ) {
    }

    public static function fromArray(array $data)
    {
        return new self(
            amount: $data['amount'],
            invoice_count: $data['invoice_count'],
            customer_id: Auth()->user()->id,
        );
    }
}
