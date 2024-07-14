<?php
declare(strict_types=1);

namespace App\Modules\Product\Application\Queries;

class GetProductQuery
{
    public function __construct(
        public readonly int $id
    ) {}
}
