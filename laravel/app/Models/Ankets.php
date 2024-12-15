<?php

namespace App\Models;

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
}
