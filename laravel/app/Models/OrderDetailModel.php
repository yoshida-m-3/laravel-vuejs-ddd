<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetailModel extends Model
{
    use HasFactory;

    protected $table = 'order_details';
    protected $fillable = [
        'id',
        'order_id',
        'item_name',
        'quantity',
        'unit_price',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(OrderModel::class);
    }
}
