<?php

namespace App\Repository\Eloquent;

use App\Models\ShortcodesStats;
use App\Repository\Interfaces\ShortcodesStatsInterface;

class ShortcodesStatsRepository extends BaseRepository implements ShortcodesStatsInterface
{
    /**
    * @var ShortcodesStats
    */
    protected $model;
    /**
    * ShortcodesStatsRepository constructor.
    * @param ShortcodesStats $model
    * @param array $relations
    */
    public function __construct(ShortcodesStats $model)
    {
        $this->model = $model;
    }

    public function firstOrNew($payLoad)
    {
        $stats = $this->model->firstOrNew($payLoad);

        $stats->billing_count = 1;

        return $stats->save();
    }
}
