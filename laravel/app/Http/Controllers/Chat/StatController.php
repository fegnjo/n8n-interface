<?php

namespace App\Http\Controllers\Chat;

class StatController extends BaseController
{

    public function index()
    {
        $count = $this->service->getStat();

//        dd($this->count);


        return view('stat')->with('count', $count);
    }
}
