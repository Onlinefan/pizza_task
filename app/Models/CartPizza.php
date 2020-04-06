<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CartPizza
 * @property integer $id
 * @property integer $cart_id
 * @property integer $pizza_id
 * @property integer $count
 * @property string $created_at
 * @property string $updated_at
 * @package App\Models
 */
class CartPizza extends Model
{
    protected $guarded = [];
}
