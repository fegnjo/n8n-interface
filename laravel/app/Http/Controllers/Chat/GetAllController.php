<?php

namespace App\Http\Controllers\Chat;

use App\Models\Chat;

class GetAllController extends BaseController
{
    public function __invoke ()
    {
        $chats = $this->service->getAll();
        return view('chats', compact('chats'));
    }

}
