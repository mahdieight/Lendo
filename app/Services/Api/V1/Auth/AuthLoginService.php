<?php

namespace App\Services\Api\V1\Auth;

use App\Dto\Auth\CustomerLoginDto;
use App\Models\Customer;
use App\Repositories\CustomerRepository;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Hash;

class AuthLoginService
{
    public function __construct(private CustomerRepository $repository)
    {
    }

    public function createCustomerToken(CustomerLoginDto $data): string
    {
        $customer = Customer::where('mobile', $data->mobile)->first();
        if (!$customer || !Hash::check($data->password, $customer->password))  {
            throw new AuthorizationException();
        }
        
        return $customer->createToken($customer->name . '-AuthToken')->plainTextToken;
    }
}
