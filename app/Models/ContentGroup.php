<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Integration ;

class ContentGroup extends Model
{
    use HasFactory;

    protected $table = 'content_group_v2';
}
