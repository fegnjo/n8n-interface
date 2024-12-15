<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetChatController extends BaseController
{
    public function __invoke ($id)
    {
        $anketa = $this->service->getAnket($id);
        $chat = $this->service->getChat($id);

        return view('chat', compact('anketa', 'chat'));
    }
}
