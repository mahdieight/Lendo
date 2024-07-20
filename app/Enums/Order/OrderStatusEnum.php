<?php

namespace App\Enums\Order;

use App\Enums\Enum;

enum OrderStatusEnum: string
{
    use Enum;

    case CHECK_HAVING_ACCOUNT   = 'check_having_account';
    case OPENING_BANK_ACCOUNT = 'opening_bank_account';
}