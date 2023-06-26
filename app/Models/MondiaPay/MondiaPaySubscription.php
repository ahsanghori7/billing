<?php

namespace App\Models\MondiaPay;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MondiaPaySubscription extends Model
{
    use HasFactory;

    protected $table = 'mondiapay_subscriptions';

    public function config()
    {
        return $this->belongsTo(MondiaPayConfig::class, 'mp_config_id');
    }
}
