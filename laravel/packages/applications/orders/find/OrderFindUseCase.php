<?php

namespace Packages\Applications\Orders\Find;

use Packages\Domains\Orders\Order;
use Packages\Infrastructures\Persistance\Orders\OrderRepository;

class OrderFindUseCase
{
    public function __construct(
        private OrderRepository $orderRepository
    ) {
    }

    public function find(int $orderId): ?Order
    {
        return $this->orderRepository->find($orderId);
    }
}
