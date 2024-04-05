<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    // Display a listing of the contacts
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Show the form for creating a new contact
    public function create()
    {
        return view('contacts.create');
    }

    // Store a newly created contact in storage
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    // Display the specified contact
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    // Show the form for editing the specified contact
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Update the specified contact in storage
    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    // Remove the specified contact from storage
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
