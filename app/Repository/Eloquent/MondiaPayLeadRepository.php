<?php

namespace App\Repository\Eloquent;

use App\Models\MondiaPay\MondiaPayLead;
use App\Repository\Interfaces\MondiaPayLeadInterface;

class MondiaPayLeadRepository extends BaseRepository implements MondiaPayLeadInterface
{
    /**
    * @var MondiaPayLead
    */
    protected $model;
    /**
    * MondiaPayLeadRepository constructor.
    * @param MondiaPayLead $model
    * @param array $relations
    */
    public function __construct(MondiaPayLead $model)
    {
        $this->model = $model;
    }

    public function getLead(object $payLoad): ?MondiaPayLead
    {
        $mondiaLead = $this->model->with('lead')->where('uuid', $payLoad->uuid)
        ->orWhere('code', $payLoad->purchaseToken)
        ->latest()->first();
        if ($mondiaLead) {
            $mondiaLead->uuid = $payLoad->uuid;
            $mondiaLead->save();
        }
        return $mondiaLead;
    }

    public function updateOrCreate(array $conditions, array $payLoad)
    {
        return $this->model->updateOrCreate(
            ['lead_id' => $conditions['lead_id']],
            $payLoad
        );
    }
}
