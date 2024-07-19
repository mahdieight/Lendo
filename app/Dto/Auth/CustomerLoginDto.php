<?php

namespace App\Dto\Auth;

use App\Contracts\DTO\DTOInterface;

class CustomerLoginDto implements DTOInterface
{
    public function __construct(
        public readonly string $mobile,
        public readonly string $password,
    ) {
    }

    public static function fromArray(array $data)
    {
        return new self(
            mobile: $data['mobile'],
            password: $data['password'],
        );
    }
}
