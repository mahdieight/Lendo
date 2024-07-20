<?php

namespace App\Dto\Auth;

use App\Contracts\DTO\DtoInterface;
use Illuminate\Support\Facades\Hash;

class CustomerRegisterDto implements DtoInterface
{
    public function __construct(
        public readonly string $name,
        public readonly string $mobile,
        public readonly string $password,
        public readonly ?string $bank_account_number,
    ) {
    }

    public static function fromArray(array $data)
    {
        return new self(
            name: $data['name'],
            mobile: $data['mobile'],
            password: Hash::make($data['password']),
            bank_account_number: @$data['bank_account_number']
        );
    }
}
