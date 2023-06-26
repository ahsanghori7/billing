<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface MondiaPayLeadInterface extends EloquentRepositoryInterface
{
    public function getLead(object $payLoad): ?Model;

    public function updateOrCreate(array $conditions, array $payLoad);
}
