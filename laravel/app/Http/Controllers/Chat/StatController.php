<?php

namespace App\Http\Controllers\Chat;

use App\Filters\StatFilter;

class StatController extends BaseController
{

    public function index(StatFilter $filter)
    {
        $count = $this->service->getStat($filter);
        if($count->count_chats == 0 && $count->count_ankets == 0 && $count->dialogue == 0 && $count->completed == 0){
            return view('stat')->with('count', $count)->withErrors(['error' => 'За данный период диалогов не найдено']);
        }
        return view('stat')->with('count', $count);
    }
}
