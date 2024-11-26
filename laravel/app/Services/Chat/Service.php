<?php

namespace App\Services\Chat;

use App\Models\Chat;

class Service
{
    public function getAll()
    {
        return Chat::groupBy('username')->paginate(15);
    }
}
