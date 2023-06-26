<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface
{
    /**
    * @var Model
    */
    protected $model;
    /**
    * BaseRepository constructor.
    * @param Model $model
    */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    /**
    * @param array $columns
    * @param array $relations
    * @return Collection
    */
    public function all(array $relations = [])
    {
        return $this->model->with($relations)->withTrashed(false)->paginate(10);
    }
    /**
    * @param array $columns
    * @param array $relations
    * @return Model
    */
    public function findOne(array $conditions, array $columns = ['*'], array $relations = []): ?Model
    {
        return $this->model->with($relations)->where($conditions)->first($columns);
    }
    /**
    * Get all trashed models.
    *
    * @return Collection
    */
    public function allTrashed(): Collection
    {
        return $this->model->onlyTrashed()->get();
    }
    /**
    *Find model by id.
    * @param int $modelId
    * @param array $columns
    * @param array $relations
    * @param array $appends
    * @return Model
    */
    public function findById(
        int $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $appends = []
    ): ?Model {
        return $this->model->select($columns)->with($relations)->findOrFail($modelId)->append($appends);
    }
    /**
    *Find trashed model by id.
    *
    * @param int $modelId
    * @return Model
    */
    public function findTrashedById(int $modelId): ?Model
    {
        return $this->model->withTrashed()->findOrFail($modelId);
    }
    /**
    * Find only trashed model by id.
    * @param int $modelId
    * @return Model
    */
    public function findOnlyTrashedById(int $modelId): ?Model
    {
        return $this->model->onlyTrashed()->findOrFail($modelId);
    }
    /**
    * Create a model.
    * @param array $payload
    * @return Model
    */
    public function create(array $payload): ?Model
    {
        $model = $this->model->create($payload);
        return $model->fresh();
    }
    /**
    * Update existing model.
    * @param array $where
    * @param array $payload
    * @return bool
    */
    public function update(array $where, array $payload): Model | null
    {
        $model = $this->model->where($where);
        $model->update($payload);
        return $model->first();
    }
    /**
    * Delete model by id.
    * @param int $modelId
    * @return bool
    */
    public function deleteById(int $modelId): bool
    {
        return $this->model->where('id', $modelId)->delete();
    }
    /**
    * Restore model by id.
    * @param int $modelId
    * @return bool
    */
    public function restoreById(int $modelId): bool
    {
        return $this->findOnlyTrashedById($modelId)->restore();
    }
    /**
    * Permanently delete model by id.
    * @param int $modelId
    * @return bool
    */
    public function permanentlyDeleteById(int $modelId): bool
    {
        return $this->findTrashedById($modelId)->forceDelete();
    }

    public function with($relations)
    {
         $this->model->with($relations);
         return $this;
    }
}
