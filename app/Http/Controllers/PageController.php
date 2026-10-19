<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home(): \Illuminate\View\View
    {
        return view('pages.home', [
            'title' => 'POS Lab | Home',
            'heading' => 'Point-of-Sale System',
        ]);
    }

    public function about(): \Illuminate\View\View
    {
        return view('pages.about', [
            'title' => 'POS Lab | About',
            'heading' => 'About This Activity',
        ]);
    }
}
