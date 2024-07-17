<?php

namespace App\Enums\Customer;

use App\Enums\Enum;

enum CustomerStatusEnum: string
{
    use Enum;

    case NORMAL   = 'normal';
    case BLOCKED = 'blocked';
}