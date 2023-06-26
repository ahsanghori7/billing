<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Integration ;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubService extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'subservices_v2';

    protected $guarded = [];

    public function integration()
    {
        return $this->hasOne(Integration::class, "id", "integration_id");
    }

    public function welcomeMsg()
    {
        return $this->hasOne(MessagesTemplate::class, "subservice_id", "id");
    }

    public function country()
    {
        return $this->hasOne(Country::class, "id", "country_id");
    }

    public function service()
    {
        return $this->hasOne(Service::class, "id", "service_id");
    }

    public function operator()
    {
        return $this->hasOne(Operator::class, "id", "operators_id");
    }
}
