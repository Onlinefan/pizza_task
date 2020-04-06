<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * @property integer $id
 * @property integer $user_id
 * @property string $cookie
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @package App\Models
 */
class Cart extends Model
{
    const ACTIVE = 0;
    const DONE = 1;

    protected $guarded = [];
    protected $attributes = [
        'status' => self::ACTIVE
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
