<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
class Chat extends Model
{
    use HasFactory;

    protected $table = 'chats';
    protected $fillable = [
        'message_time',
        'user_id',
        'message',
        'status',
        'adddate'
    ];

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
