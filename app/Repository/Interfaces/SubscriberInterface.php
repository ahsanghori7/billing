<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface SubscriberInterface extends EloquentRepositoryInterface
{
    public function updateOrCreate(array $payLoad);
}
