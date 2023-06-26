<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraceProcessSubscriber extends Model
{
    use HasFactory;

    protected $table = 'trace_process_subscriber';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lead_id' , 'subscriber_id', 'msisdn',
    'subservice_id', 'service_id', 'process'];
}
