<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessagesTemplate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'messages_template';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['text' , 'free_text', 'subservice_id', 'shortcode', 'type'];

    public function subService()
    {
        return $this->hasOne(SubService::class, "id", "subservice_id");
    }
}
