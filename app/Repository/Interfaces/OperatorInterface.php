<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface OperatorInterface extends EloquentRepositoryInterface
{
    public function getSubService(object $payLoad): Model;

    public function filter($payload): LengthAwarePaginator | null;
}
