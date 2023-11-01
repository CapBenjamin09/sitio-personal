<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Models\Contacts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contacts::paginate(15);
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(CreateContactRequest $request)
    {
        $validated = $request->all();

        Contacts::create($validated);

        return redirect()->route('contact.create')->with('status', 'Se ha enviado el formulario con exito!');
    }

    public function show(Contacts $contact)
    {
        return view('contact.show', compact('contact'));
    }

    public function destroy(Contacts $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
