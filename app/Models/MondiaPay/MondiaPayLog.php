<?php

namespace App\Models\MondiaPay;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MondiaPayLog extends Model
{
    use HasFactory;

    protected $connection = 'integration';

    protected $table = 'mondiapay_logs';

    protected $fillable = [
        'url',
        'request',
        'response',
    ];

    protected $casts = [
        'request' => 'array',
        'response' => 'array',
    ];
}
