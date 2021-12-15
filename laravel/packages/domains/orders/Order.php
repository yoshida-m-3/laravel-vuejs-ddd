<?php

namespace Packages\Domains\Orders;

use App\Models\OrderModel;
use Carbon\Carbon;
use InvalidArgumentException;
use Packages\Domains\Interfaces\AgregateRoot;
use Packages\Domains\Interfaces\Entity;

class Order implements Entity, AgregateRoot
{
    private function __construct(
        public readonly ?int $id,
        public readonly string $orderNumber,
        public readonly Carbon $orderDatetime,
    ) {
        if (strlen($orderNumber) > 10) {
            throw new InvalidArgumentException('注文番号は10文字以内で入力して下さい。');
        }
    }

    public static function create(string $orderNumber): Order
    {
        return new self(
            id: null,
            orderNumber: $orderNumber,
            orderDatetime: Carbon::now()
        );
    }

    public static function reconstruct(int $id, string $orderNumber, Carbon $orderDatetime): Order
    {
        return new self(
            id: $id,
            orderNumber: $orderNumber,
            orderDatetime: $orderDatetime
        );
    }

    public function toModel(): OrderModel
    {
        return new OrderModel([
            'id' => $this->id,
            'order_number' => $this->orderNumber,
            'order_datetime' => $this->orderDatetime,
        ]);
    }
}
