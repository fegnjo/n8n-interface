<?php

namespace App\Filters;

class ChatsFilter extends QueryFilter{

    public function search_field($search_string = ''){
        return $this->builder
            ->where('user_id', 'LIKE', '%'.$search_string.'%')
            ->orWhere('username', 'LIKE', '%'.$search_string.'%')
            ->orWhere('adddate', 'LIKE', '%'.$search_string.'%');

    }
}
