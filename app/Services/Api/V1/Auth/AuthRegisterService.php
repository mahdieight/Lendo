<?php

namespace App\Services\Api\V1\Auth;

use App\Dto\Auth\CustomerRegisterDto;
use App\Repositories\CustomerRepository;

class AuthRegisterService
{
    public function __construct(private CustomerRepository $repository)
    {
    }
    
    public function createCustomer(CustomerRegisterDto $data)
    {
        return $this->repository->create($data);
    }
}
