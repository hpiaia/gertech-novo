<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class CompanyController extends Controller
{
    /**
     * Displays the company page.
     *
     * @return View|Factory
     */
    public function index()
    {
        return view('pages.company');
    }
}
