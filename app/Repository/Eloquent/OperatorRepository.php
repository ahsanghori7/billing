<?php

namespace App\Repository\Eloquent;

use App\Models\Operator;
use Illuminate\Database\Eloquent\Model;
use App\Repository\Interfaces\OperatorInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class OperatorRepository extends BaseRepository implements OperatorInterface
{
    /**
    * @var Operator
    */
    protected $model;
    /**
    * OperatorRepository constructor.
    * @param Operator $model
    * @param array $relations
    */
    public function __construct(Operator $model)
    {
        $this->model = $model;
    }

    public function getSubService(object $payLoad): Model
    {
        $operator =  $this->model->with(['SubService' => function ($q) use ($payLoad) {
            $q->where('service_id', $payLoad->service);
        }])
        ->where('operators_code', $payLoad->operatorCode)
        ->orWhere('additional_mccmnc', 'like', '%' . $payLoad->operatorCode . '%')
        ->first();

        return $operator;
    }

    /**
     * Retrieve paginated data.
     *
     * @return LengthAwarePaginator
     */

    public function filter($payload): LengthAwarePaginator | null
    {
        $query = $this->model->with('country');

        if ($payload->country_id) {
            $query->orWhere('country_id', $payload->country_id);
        }

        return $query->paginate(20);
    }
}
