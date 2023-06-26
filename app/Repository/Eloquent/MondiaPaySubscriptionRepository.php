<?php

namespace App\Repository\Eloquent;

use App\Models\MondiaPay\MondiaPaySubscription;

class MondiaPaySubscriptionRepository extends BaseRepository
{
    /**
    * @var MondiaPaySubscription
    */
    protected $model;
    /**
    * MondiaPaySubscriptionRepository constructor.
    * @param MondiaPaySubscription $model
    * @param array $relations
    */
    public function __construct(MondiaPaySubscription $model)
    {
        $this->model = $model;
    }
}
