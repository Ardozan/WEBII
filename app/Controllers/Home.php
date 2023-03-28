<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | WEBII',
            'page' => 'dashboard',
            'name' => 'Billy Davidson'
        ];
        return view('dashboard', $data);
    }
}
