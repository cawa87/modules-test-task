<?php
declare(strict_types=1);

namespace App\Modules\Product\Infrastructure\Persistence;

use Illuminate\Database\Eloquent\Model;

class EloquentProduct extends Model
{
    protected $fillable = ['name', 'price'];
    protected $table = 'products';
}
