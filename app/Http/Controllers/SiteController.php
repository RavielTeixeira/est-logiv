<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Raviel';
        $habits = ['Programar', 'Jogar', 'Futebol'];

    return view('components.home', [
     'name' => $name,
     'habits' => $habits
   ]);
  }
}