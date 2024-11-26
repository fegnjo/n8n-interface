<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetChatController extends Controller
{
    public function __invoke ()
    {
        return view('chat');
    }
}
