<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @property integer $id
 * @property integer $cart_id
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @package App\Models
 */
class Order extends Model
{
    const ACTIVE = 0;
    const DONE = 1;

    protected $guarded = [];
    protected $attributes = [
        'status' => self::ACTIVE
    ];
}
