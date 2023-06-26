<?php

namespace App\Repository\Eloquent;

use App\Models\landing;
use App\Repository\Interfaces\LandingInterface;

class LandingRepository extends BaseRepository implements LandingInterface
{
    /**
    * @var landing
    */
    protected $model;
    /**
    * LandingRepository constructor.
    * @param landing $model
    * @param array $relations
    */
    public function __construct(landing $model)
    {
        $this->model = $model;
    }

    public function checkLimit(object $payLoad)
    {
        return $this->model::where(['landing_id' => $payLoad->landing_id])
        ->whereColumn('counter', '>=', 'limit')->first();
    }

    public function increaseCounter(object $payLoad)
    {
        if (isset($payLoad->landing_id)) {
            $this->model::where(
                ['landing_id' => $payLoad->landing_id ,
                'subservice_id' => $payLoad->subService_ID]
            )->increment('counter');
        }
    }
}
