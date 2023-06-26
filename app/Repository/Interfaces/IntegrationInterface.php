<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IntegrationInterface extends EloquentRepositoryInterface
{
    public function get(object $payload): ?LengthAwarePaginator;
}
