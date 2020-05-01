<?php

namespace App\Http\Controllers;

use App\Category;
use App\Solution;

class SolutionsController extends Controller
{
    public function index()
    {
        $categories = Category::with('solutions')->get();

        return view('pages.solutions', compact('categories'));
    }

    public function show(Solution $solution)
    {
        return view('pages.solution', compact('solution'));
    }
}
