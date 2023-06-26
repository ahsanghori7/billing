<?php

namespace App\Repository\Eloquent;

use App\Models\MondiaPay\MondiaPayNotification;
use App\Repository\Interfaces\MondiaPayNotificationInterface;

class MondiaPayNotificationRepository extends BaseRepository implements MondiaPayNotificationInterface
{
    /**
    * @var MondiaPayNotification
    */
    protected $model;
    /**
    * MondiaPayNotificationRepository constructor.
    * @param MondiaPayNotification $model
    * @param array $relations
    */
    public function __construct(MondiaPayNotification $model)
    {
        $this->model = $model;
    }
}
