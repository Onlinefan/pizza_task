<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pizza
 * @property integer $id
 * @property string $name
 * @property float $cost
 * @property string $preview
 * @property string $description
 * @property string $img_url
 * @property string $created_at
 * @property string $updated_at
 * @package App\Models
 */
class Pizza extends Model
{
    protected $guarded = [];
}
