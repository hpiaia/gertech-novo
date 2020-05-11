<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class JobsController extends Controller
{
    /**
     * Displays the jobs page.
     *
     * @return View|Factory
     */
    public function index()
    {
        $jobs = Job::all();

        return view('pages.jobs', compact('jobs'));
    }
}
