<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    public function about()
    {
        return view('frontend.about-us');
    }

}
