<?php

namespace App\Http\Controllers\Api\V1\Order;

use App\Dto\Order\OrderStoreDto;
use App\Events\OrderCreated;
use App\Facades\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Order\OrderStoreRequest;
use App\Http\Resources\Api\V1\Order\OrderResource;
use App\Services\Api\V1\Order\OrderStoreService;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class OrderStoreController extends Controller
{
    public function __construct(private OrderStoreService $service)
    {
    }

    public function __invoke(OrderStoreRequest $request)
    {
        $orderDTO = OrderStoreDto::fromArray($request->all());

        $order = $this->service->createOrder($orderDTO);
        
        return Response::message('order.messages.order_was_created_successfully')->status(HttpResponse::HTTP_CREATED)->data(new OrderResource($order));
    }
}
