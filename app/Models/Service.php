<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services_v2';

    public function subService()
    {
        return $this->hasMany(SubService::class, "service_id", "id");
    }
}
