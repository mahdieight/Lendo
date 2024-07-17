<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Dto\Auth\CustomerRegisterDto;
use App\Enums\Customer\CustomerStatusEnum;
use App\Facades\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\CustomerRegisterRequest;
use App\Models\Customer;
use App\Services\Api\V1\Auth\AuthRegisterService;
use Illuminate\Support\Facades\Hash;

class AuthRegisterController extends Controller
{
    public function __construct(private AuthRegisterService $service)
    {
    }
    public function __invoke(CustomerRegisterRequest $request)
    {
        $customerDTO =  CustomerRegisterDto::fromArray($request->all());

        $customer = $this->service->createCustomer($customerDTO);

        $token = $customer->createToken($customer->name . '-AuthToken')->plainTextToken;
        return Response::message('User Created ')->data(['access_token' => $token]);
    }
}
