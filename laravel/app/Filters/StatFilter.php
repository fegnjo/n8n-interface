<?php

namespace App\Filters;

use App\Http\Requests\Main\StatRequest;
use Illuminate\Http\Request;

class StatFilter extends QueryFilter
{
    private $s_date;
    private $e_date;

    public function __construct(StatRequest $request)
    {

        $this->request = $request;
    }
    public function start_date($start_date){
        $this->s_date = $start_date;

    }

    public function end_date($end_date){
        $this->e_date = $end_date;

        return $this->builder
            ->whereBetween('adddate', [$this->s_date, $this->e_date]);

    }
}
