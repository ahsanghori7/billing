<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
    use HasFactory;

    public function getSubserviceIdAttribute()
    {
        return $this->attributes['subService_ID'];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['msisdn' , 'status', 'Subdate', 'Country_ID',
    'Operators_ID', 'Service_ID', 'ContentGroup', 'CSeq', 'source', 'subsource',
    'FreeCounter', 'Integration_ID', 'subService_ID', 'Shortcode' , 'FreeShortcode', 'pin', 'IP', 'click_id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function integration()
    {
        return $this->hasOne(Integration::class, "id", "Integration_ID");
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscriber::class, 'Leads_ID', 'ID');
    }
}
