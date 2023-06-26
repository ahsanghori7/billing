<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\SubscriberInterface;
use App\Models\Subscriber;
use App\Repository\Eloquent\Boolen;

class SubscriberRepository extends BaseRepository implements SubscriberInterface
{
    /**
    * @var Subscriber
    */
    protected $model;
    /**
    * SubscriberRepository constructor.
    * @param Subscriber $model
    * @param array $relations
    */
    public function __construct(Subscriber $model)
    {
        $this->model = $model;
    }

    public function updateOrCreate(array $payLoad)
    {
        return $this->model->updateOrCreate(['Leads_ID' => $payLoad['Leads_ID']], $payLoad);
    }

    public function getSubscriberByMsisdn($payLoad)
    {
        return $this->model::with('subService', 'contentGroup')
        ->where(
            ['msisdn' => $payLoad->msisdn, 'status' => true]
        )->orderby('Subdate', 'desc')->get();
    }
}
