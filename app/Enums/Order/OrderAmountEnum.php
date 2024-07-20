<?php

namespace App\Enums\Order;

use App\Enums\Enum;

enum OrderAmountEnum: int
{
    use Enum;

    case i10000000 = 10000000;
    case i12000000 = 12000000;
    case i15000000 = 15000000;
    case i20000000 = 20000000;
}
