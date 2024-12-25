<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ankets extends Model
{
    use HasFactory;

    protected $table = 'ankets';
    protected $guarded  = [
        'user_id',
        'adddate',
        'anketa'
    ];
    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
