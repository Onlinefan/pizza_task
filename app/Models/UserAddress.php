<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserAddress
 * @property integer $id
 * @property integer $user_id
 * @property string $address
 * @property string $address_name
 * @property string $created_at
 * @property string $updated_at
 * @package App\Models
 */
class UserAddress extends Model
{
    protected $guarded = [];
}
