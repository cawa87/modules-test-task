<?php

declare(strict_types=1);

namespace App\Modules\User\Infrastructure\Persistence;

use Illuminate\Database\Eloquent\Model;

class EloquentUser extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];
}
