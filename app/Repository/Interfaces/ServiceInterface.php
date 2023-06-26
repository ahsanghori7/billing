<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface ServiceInterface extends EloquentRepositoryInterface
{
    public function getCallbackURL(object $payLoad);
}
