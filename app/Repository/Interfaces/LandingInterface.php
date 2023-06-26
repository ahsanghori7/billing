<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface LandingInterface extends EloquentRepositoryInterface
{
    public function checkLimit(object $payLoad);

    public function increaseCounter(object $payLoad);
}
