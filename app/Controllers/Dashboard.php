<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'SIMRS Pariaman'
        ];

        return view('dashboard/index', $data);
    }
}
