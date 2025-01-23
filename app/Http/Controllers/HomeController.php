<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', ['title' => 'Home Page']);
    }

    public function about()
    {
        return view('about', ['title' => 'About Page', 'nama' => 'Pramartha']);
    }

    public function contact()
    {
        return view('contact', ['title' => 'Contact']);
    }
}
