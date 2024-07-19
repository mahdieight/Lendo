<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Dto\Auth\CustomerLoginDto;
use App\Facades\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\CustomerLoginRequest;
use App\Services\Api\V1\Auth\AuthLoginService;

class AuthLoginController extends Controller
{
    public function __construct(private AuthLoginService $service)
    {
    }

    public function __invoke(CustomerLoginRequest $request)
    {
        $customerDTO =  CustomerLoginDto::fromArray($request->all());
        
        $token = $this->service->createCustomerToken($customerDTO);
        return Response::message('User Created ')->data(['access_token' => $token]);
    }
}
