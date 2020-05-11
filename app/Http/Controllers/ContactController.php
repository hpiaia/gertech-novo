<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Displays the contact page.
     *
     * @return View|Factory
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Stores a new contact request.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $contact = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::query()->create($contact);

        session()->flash('success', true);

        return back();
    }
}
