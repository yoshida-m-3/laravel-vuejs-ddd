<?php

namespace Packages\Applications\Orders\Create;

use DB;
use Packages\Domains\Orders\Order;
use Packages\Infrastructures\Persistance\Orders\OrderRepository;

class OrderCreateUseCase
{
    public function __construct(
        private OrderRepository $orderRepository
    ) {
    }

    /**
     * @param OrderCreateInputData $inputData
     * @return int オートインクリメント採番されたID
     */
    public function create(OrderCreateInputData $inputData): int
    {
        $order = Order::create($inputData->orderNumber);

        return DB::transaction(function () use ($order): int {
            return $this->orderRepository->insert($order);
        });
    }
}
