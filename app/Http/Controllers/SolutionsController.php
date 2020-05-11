<?php

namespace App\Http\Controllers;

use App\Category;
use App\Solution;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class SolutionsController extends Controller
{
    /**
     * Displays the solutions page.
     *
     * @return View|Factory
     */
    public function index()
    {
        $categories = Category::with('solutions')->get();

        return view('pages.solutions', compact('categories'));
    }

    /**
     * Shows a solution details page.
     *
     * @param Solution $solution
     * @return View|Factory
     */
    public function show(Solution $solution)
    {
        return view('pages.solution', compact('solution'));
    }
}
