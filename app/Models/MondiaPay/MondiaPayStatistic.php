<?php

namespace App\Models\MondiaPay;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MondiaPayStatistic extends Model
{
    use HasFactory;

    protected $connection = 'integration';

    protected $table = 'mondiapay_statistics';

    protected $fillable = [
        'operator_id',
        'country_id',
        'subscription_type_id',
        'service_name',
        'date',
        'full_billing_users',
        'full_billing_amount',
        'partial_billing_users',
        'partial_billing_amount',
        'total_users',
        'total_amount',
        'earning',
    ];
}
