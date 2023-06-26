<?php

namespace App\Repository\Eloquent;

use App\Models\Leads;
use App\Repository\Interfaces\LeadInterface;

class LeadRepository extends BaseRepository implements LeadInterface
{
    /**
    * @var Leads
    */
    protected $model;
    /**
    * LeadRepository constructor.
    * @param Leads $model
    * @param array $relations
    */
    public function __construct(Leads $model)
    {
        $this->model = $model;
    }
}
