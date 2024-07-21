<?php

namespace App\Services\Api\V1\Order;

use App\Dto\Order\OrderStoreDto;
use App\Enums\Customer\CustomerStatusEnum;
use App\Events\Api\V1\Order\OrderCreated;
use App\Events\OrderCreated as EventsOrderCreated;
use App\Exceptions\ForbiddenAccessException;
use App\Models\Order;
use App\Repositories\OrderRepository;

class OrderStoreService
{
    public function __construct(private OrderRepository $repository)
    {
    }

    public function createOrder(OrderStoreDto $data): Order
    {
        if (Auth()->user()->status != CustomerStatusEnum::NORMAL) throw new ForbiddenAccessException('order.errors.customer_is_inactive');

        $order = $this->repository->create($data);
        EventsOrderCreated::dispatch($order);

        return $order;
    }
}
