<?php

namespace App\Enums\Order;

use App\Enums\Enum;

enum OrderInvoiceCountEnum: int
{
    use Enum;

    case six    = 6;
    case nine   = 9;
    case twelve = 12;
}
