<?php

namespace App\Repository\Eloquent;

use App\Models\SubService;
use App\Repository\Interfaces\SubServiceInterface;

class SubServiceRepository extends BaseRepository implements SubServiceInterface
{
    /**
    * @var SubService
    */
    protected $model;
    /**
    * SubServiceRepository constructor.
    * @param SubService $model
    * @param array $relations
    */
    public function __construct(SubService $model)
    {
        $this->model = $model;
    }
}
