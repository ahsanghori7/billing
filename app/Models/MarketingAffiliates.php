<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MarketingAffiliates extends Model
{
    use HasFactory;

    public function affiliateParams(): HasMany
    {
        return $this->hasMany(MarketingAffiliateParams::class, "affiliate_id");
    }
}
