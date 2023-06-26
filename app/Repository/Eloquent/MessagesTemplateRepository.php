<?php

namespace App\Repository\Eloquent;

use App\Models\MessagesTemplate;
use App\Repository\Interfaces\MessagesTemplateInterface;

class MessagesTemplateRepository extends BaseRepository implements MessagesTemplateInterface
{
    /**
    * @var MessagesTemplate
    */
    protected $model;
    /**
    * MessagesTemplateRepository constructor.
    * @param MessagesTemplate $model
    * @param array $relations
    */
    public function __construct(MessagesTemplate $model)
    {
        $this->model = $model;
    }

    public function filter($payload)
    {
        $query = $this->model->with('subService');

        if ($payload->subservice_id) {
            $query->orWhere('subservice_id', $payload->subservice_id);
        }

        if ($payload->shortcode) {
            $query->orWhere('shortcode', $payload->shortcode);
        }
        return $query->paginate(20);
    }
}
