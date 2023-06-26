<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortcodesStats extends Model
{
    use HasFactory;

    protected $table = 'shortcodes_stats';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subservice' , 'service', 'Operator_ID',
    'shortcode', 'Date', 'billing_count'];

    public $timestamps = false;
}
