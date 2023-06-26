<?php

namespace App\Models\MondiaPay;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MondiaPayNotification extends Model
{
    use HasFactory;

    protected $connection = 'integration';

    protected $table = 'mondiapay_notifications';

    protected $fillable = [
        'uuid',
        'purchase_token',
        'subscription_id',
        'subscription_type_id',
        'event',
        'reason',
        'status',
        'sub_status',
        'start_date',
        'end_date',
        'price_amount',
        'price_currency',
        'trial_end_date',
        'tagged_for_cancellation',
        'event_date_time',
        'event_uuid',
        'full_response',
        'lead_id',
        'subscriber_id',
    ];

    protected $casts = [
        'full_response' => 'array'
    ];

    public function service()
    {
        return $this->belongsTo(MondiaPayService::class, 'subscription_type_i', 'subscription_type_i');
    }
}
