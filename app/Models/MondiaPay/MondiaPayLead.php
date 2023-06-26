<?php

namespace App\Models\MondiaPay;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Leads;

class MondiaPayLead extends Model
{
    use HasFactory;

    protected $table = 'mondiapay_leads';

    protected $fillable = [
        'lead_id',
        'msisdn',
        'code',
        'uuid',
        'status',
        'lead_status',
        'subscriber_id'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('code', function (Builder $builder) {
            $builder->whereNotNull('code');
        });
    }

    public function lead()
    {
        return $this->belongsTo(Leads::class, 'lead_id');
    }
}
