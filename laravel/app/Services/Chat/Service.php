<?php

namespace App\Services\Chat;

use App\Models\Chat;
use App\Models\Ankets;

class Service
{
    public int $count_chats;
    public int $count_ankets;
    public int $dialogue;
    public int $completed;


    public function getAll($filter = '')
    {
        return Chat::groupBy('username')->filter($filter)->paginate(15);
    }

    public function getStat()
    {
        $this->count_chats = Chat::groupBy('user_id')->get()->count();
        $this->count_ankets = Ankets::groupBy('user_id')->get()->count();
        $this->dialogue = Chat::groupBy('user_id')->where('status', 'toWork')->get()->count();
        $this->completed = Chat::groupBy('user_id')->where('status', 'archive')->get()->count();

        return $this;
    }

    public function getAnket($id)
    {
        $anketa = Ankets::select('anketa')->where('user_id', $id)->get()->toArray();
        if(!empty($anketa)){
            return json_decode($anketa[0]['anketa'], true);
        }
        return 0;
    }

    public function getChat($id)
    {
        return Chat::where('user_id', $id)->orderBy('message_time')->get()->toArray();
    }
}
