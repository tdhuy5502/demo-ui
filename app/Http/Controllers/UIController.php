<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    //
    public function whatwedo()
    {
        return view('whatwedo');
    }

    public function project()
    {
        return view('project_hasdone');
    }

    public function aboutUs()
    {
        return view('content');
    }

    public function contact()
    {
        return view('contact');
    }
}
