<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface MessagesTemplateInterface extends EloquentRepositoryInterface
{
    public function filter($payload);
}
