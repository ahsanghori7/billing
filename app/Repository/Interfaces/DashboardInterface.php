<?php

namespace App\Repository\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface DashboardInterface extends EloquentRepositoryInterface
{
    public function get();
    public function getLeads();
}
