<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
// GET /
    public function index()
    {
        $name = 'Raviel';
        $habits = ['Programar','Jogar','Futebol'];
        
        return view(view: 'home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
