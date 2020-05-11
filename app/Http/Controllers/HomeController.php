<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{
    /**
     * Displays the home page.
     *
     * @return View|Factory
     */
    public function index()
    {
        return view('pages.home');
    }
}
