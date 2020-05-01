<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function index(Request $request, string $lang)
    {
        if (in_array($lang, ['pt-br', 'en', 'es'])) {
            $request->session()->put('locale', $lang);
        }

        return back();
    }
}
