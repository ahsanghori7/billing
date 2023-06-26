<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['CurrentActive' , 'Subservice_ID', 'Source_ID',
    'Subsource_ID', 'Date'];

    public $timestamps = false;
}
