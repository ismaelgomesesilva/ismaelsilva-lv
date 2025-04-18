<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }


    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->fill($request->validated());

        if ($contact->isDirty()) {
            $contact->update($request->validated());

            return redirect()->route('contacts.index')->with('success', 'Contact updated!');
        }

        return redirect()->route('contacts.index')->with('info', 'No changes made to the contact.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact deleted!');
    }
}
