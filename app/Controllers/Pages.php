<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        return view('pages/home',[
            'title' => 'Home',
            'active'=>'home',
        ]);

    }

    public function about()
    {
        return view('pages/about',[
            'title' => 'About',
            'active' => 'about',
        ]);
    }
    public function album()
    {
        return view('pages/album',[
            'title' => 'Album',
            'active' => 'album',
        ]);
    }
    public function contact()
    {
        return view('pages/contact',[
            'title' => 'Contact',
            'active' => 'contact',
        ]);
    }
}