<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('view_home');
    }
}
