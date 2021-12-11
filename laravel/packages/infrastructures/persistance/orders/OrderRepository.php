<?php

namespace Packages\Infrastructures\Persistance\Orders;

use App\Models\OrderModel;
use Illuminate\Support\LazyCollection;
use Packages\Domains\Orders\Order;

class OrderRepository
{
    public function find(int $orderId): ?Order
    {
        return OrderModel::find($orderId)?->toEntity();
    }

    /**
     * @return LazyCollection<Order>
     */
    public function fetchAll(): LazyCollection
    {
        return OrderModel::cursor()
            ->map(fn (OrderModel $m) => $m->toEntity())
        ;
    }

    /**
     * @return int オートインクリメント採番されたID
     */
    public function insert(Order $order): int
    {
        return $order->toModel()->create()->id;
    }

    /**
     * @return boolean 更新成功:true / 失敗:false
     */
    public function update(Order $order): bool
    {
        return $order->toModel()->save();
    }
}
