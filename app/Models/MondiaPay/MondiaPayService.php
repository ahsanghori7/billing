<?php

namespace App\Models\MondiaPay;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MondiaPayService extends Model
{
    use HasFactory;

    protected $connection = 'integration';

    protected $table = 'mondiapay_services';

    protected $fillable = [
        'subscription_type_id',
        'country_id',
        'operator_id',
        'subservice_id',
        'service_name',
        'currency',
        'end_user_tarrif',
        'revenue_percent',
    ];
}
