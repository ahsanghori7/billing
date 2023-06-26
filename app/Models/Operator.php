<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubService;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operator extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'operators_v2' ;

    protected $fillable = ['country_id','operator_code','operator_name','provider_id'];

    public function subService()
    {
        return $this->hasOne(SubService::class, "operators_id", "id");
    }

    public function country()
    {
        return $this->hasOne(Country::class, "id", "country_id");
    }
}
