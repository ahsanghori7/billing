<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Integration extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'integration_v2' ;

    protected $guarded = [];

    public function provider()
    {
        return $this->hasOne(Provider::class, "ID", "Provider_id");
    }
}
