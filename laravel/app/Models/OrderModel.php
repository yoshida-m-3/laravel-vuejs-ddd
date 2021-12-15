<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Packages\Domains\Orders\Order;

class OrderModel extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'id',
        'order_number',
        'order_datetime',
    ];

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetailDataModel::class, 'order_id');
    }

    public function toEntity(): Order
    {
        return Order::reconstruct(
            id: $this->id,
            orderNumber: $this->order_number,
            orderDatetime: new Carbon($this->order_datetime)
        );
    }
}
