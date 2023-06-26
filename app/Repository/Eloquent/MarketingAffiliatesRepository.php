<?php

namespace App\Repository\Eloquent;

use App\Models\MarketingAffiliates;
use App\Repository\Interfaces\MarketingAffiliatesInterface;

class MarketingAffiliatesRepository extends BaseRepository implements MarketingAffiliatesInterface
{
    /**
    * @var MarketingAffiliates
    */
    protected $model;
    /**
    * MarketingAffiliatesRepository constructor.
    * @param MarketingAffiliates $model
    * @param array $relations
    */
    public function __construct(MarketingAffiliates $model)
    {
        $this->model = $model;
    }

    public function getAffiliates(object $payLoad)
    {
        return $this->model->with(['affiliateParams' => function ($q) use ($payLoad) {
            $q->where('country_id', $payLoad->Country_ID)
              ->orwhereNull('country_id');
        }])
        ->where(['source' => $payLoad->source])->get();
    }
}
