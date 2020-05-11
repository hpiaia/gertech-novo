<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RuntimeException;

class LocaleController extends Controller
{
    /**
     * Changes the application locale.
     *
     * @param Request $request
     * @param string $lang
     * @return RedirectResponse
     * @throws RuntimeException
     */
    public function index(Request $request, string $lang)
    {
        if (in_array($lang, ['pt-br', 'en', 'es'])) {
            $request->session()->put('locale', $lang);
        }

        return back();
    }
}
