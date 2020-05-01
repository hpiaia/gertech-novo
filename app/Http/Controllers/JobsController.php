<?php

namespace App\Http\Controllers;

use App\Job;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('pages.jobs', compact('jobs'));
    }
}
