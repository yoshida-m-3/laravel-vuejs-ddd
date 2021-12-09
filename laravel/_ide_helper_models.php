<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\OrderDetailModel
 *
 * @property int $id
 * @property int $order_id
 * @property string $item_name
 * @property int $quantity
 * @property int $unit_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\OrderModel $order
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderDetailModel whereUpdatedAt($value)
 */
	class OrderDetailModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderModel
 *
 * @property int $id
 * @property string $order_number
 * @property string $order_datetime
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel whereOrderDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderModel whereUpdatedAt($value)
 */
	class OrderModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

