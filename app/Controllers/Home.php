<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Carrega a página de apresentação (Landing Page)
        return view('home_layout');
    }
}