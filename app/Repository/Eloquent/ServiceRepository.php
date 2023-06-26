<?php

namespace App\Repository\Eloquent;

use App\Models\Service;
use App\Repository\Interfaces\ServiceInterface;

class ServiceRepository extends BaseRepository implements ServiceInterface
{
    /**
    * @var Service
    */
    protected $model;
    /**
    * ServiceRepository constructor.
    * @param Service $model
    * @param array $relations
    */
    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    public function getCallbackURL(object $payLoad)
    {
        $operator =  $this->model->with(['subService' => function ($q) use ($payLoad) {
            $q->where('id', $payLoad->subService_ID)->whereNotNull('callback_url');
        }])
        ->where(['id' => $payLoad->Service_ID, 'callback_enable' => 1])
        ->whereNotNull('callback_url')
        ->first();

        return $operator;
    }
}
