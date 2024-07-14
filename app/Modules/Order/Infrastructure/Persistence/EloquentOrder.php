<?php

declare(strict_types=1);

namespace App\Modules\Order\Infrastructure\Persistence;

use Illuminate\Database\Eloquent\Model;

class EloquentOrder extends Model
{
    protected $table = 'orders';

    protected $fillable = ['user_id', 'products'];
}
