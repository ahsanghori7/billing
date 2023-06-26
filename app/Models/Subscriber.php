<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function getSubserviceIdAttribute()
    {
        return $this->attributes['subService_ID'];
    }

    public function getLeadIdAttribute()
    {
        return $this->attributes['Leads_ID'];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['msisdn' , 'status', 'Country_ID',
    'Operators_ID', 'Service_ID', 'ContentGroup', 'CSeq', 'source', 'subsource',
    'FreeCounter', 'Integration_ID', 'subService_ID', 'Shortcode' , 'FreeShortcode', 'pin', 'IP','minisite','Leads_ID'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function subService()
    {
        return $this->hasOne(SubService::class, "id", "subService_ID");
    }

    public function contentGroup()
    {
        return $this->hasOne(ContentGroup::class, "id", "ContentGroup");
    }

    public function country()
    {
        return $this->hasMany(Country::class, "id", "Country_ID");
    }
}
