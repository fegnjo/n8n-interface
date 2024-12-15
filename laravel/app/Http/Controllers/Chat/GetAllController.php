<?php

namespace App\Http\Controllers\Chat;

use App\Filters\ChatsFilter;
use App\Models\Chat;

class GetAllController extends BaseController
{
    public function __invoke (ChatsFilter $filter)
    {

        $chats = $this->service->getAll($filter);
        return view('chats', compact('chats'));
    }

}
