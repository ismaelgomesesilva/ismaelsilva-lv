<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Contact $contact)
    {
        return view('contacts.show');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit');
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }

    public function destroy(Contact $contact)
    {
        //
    }
}
