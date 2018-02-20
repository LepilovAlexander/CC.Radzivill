<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home', ['active' => 'home']);
    }

    public function accounting()
    {
        return view('pages.accounting', ['active' => 'accounting']);
    }

    public function juristic()
    {
        return view('pages.juristic', ['active' => 'juristic']);
    }

    public function personnel()
    {
        return view('pages.personnel', ['active' => 'personnel']);
    }

    public function development()
    {
        return view('pages.development', ['active' => 'development']);
    }

    public function holidays()
    {
        return view('pages.holidays', ['active' => 'holidays']);
    }

    public function courses()
    {
        return view('pages.courses', ['active' => 'courses']);
    }

    public function contacts()
    {
        return view('pages.contacts', ['active' => 'contacts']);
    }
}
