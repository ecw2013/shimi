<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contacts.index', [
            'contacts' => Contact::query()
                ->orderBy('is_viewed')
                ->paginate(20)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact->update(['is_viewed' => true]);
        return view('admin.contacts.show', ['contact' => $contact]);
    }
}
