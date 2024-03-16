<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');

    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }


    public function about()
    {
        return view('about-us');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetails()
    {
        return view('blog-details');
    }

    public function rooms()
    {
        return view('rooms');
    }


    public function roomsDetails()
    {
        return view('room-details');
    }
}
