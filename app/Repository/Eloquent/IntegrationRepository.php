<?php

namespace App\Repository\Eloquent;

use App\Models\Integration;
use App\Repository\Interfaces\IntegrationInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

class IntegrationRepository extends BaseRepository implements IntegrationInterface
{
    /**
    * @var Integration
    */
    protected $model;
    /**
    * IntegrationRepository constructor.
    * @param Integration $model
    * @param array $relations
    */
    public function __construct(Integration $model)
    {
        $this->model = $model;
    }

    public function get(object $payload): ?LengthAwarePaginator
    {
        $query = $this->model::with('provider');

        if ($payload->provider_id) {
            $query->where(
                ['Provider_id' => $payload->provider_id]
            );
        }

        if ($payload->integration_file) {
            $query->where(
                ['integration_file' => $payload->integration_file]
            );
        }

        return $query->paginate(15);
    }
}
