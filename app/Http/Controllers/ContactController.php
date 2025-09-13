<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->first();
        return view('aloqa', compact('contact'));
        
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'address'        => 'nullable|string|max:255',
            'phone'          => 'nullable|string|max:255',
            'fax'            => 'nullable|string|max:255',
            'email'          => 'nullable|email|max:255',
            'work_time'      => 'nullable|string|max:255',
            'lunch_time'     => 'nullable|string|max:255',
            'bus'            => 'nullable|string|max:255',
            'marshrut'       => 'nullable|string|max:255',
            'stop'           => 'nullable|string|max:255',
            'telegram'       => 'nullable|string|max:255',
            'facebook'       => 'nullable|string|max:255',
            'youtube'        => 'nullable|string|max:255',
            'instagram'      => 'nullable|string|max:255',
            'map_link'       => 'nullable|string|max:255',
            'rating'         => 'nullable|numeric|min:0|max:9.9',
            'reviews_count'  => 'nullable|integer|min:0',
        ]);

        $contact = Contact::create($validated);

        return response()->json($contact, 201);
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $validated = $request->validate([
            'address'        => 'nullable|string|max:255',
            'phone'          => 'nullable|string|max:255',
            'fax'            => 'nullable|string|max:255',
            'email'          => 'nullable|email|max:255',
            'work_time'      => 'nullable|string|max:255',
            'lunch_time'     => 'nullable|string|max:255',
            'bus'            => 'nullable|string|max:255',
            'marshrut'       => 'nullable|string|max:255',
            'stop'           => 'nullable|string|max:255',
            'telegram'       => 'nullable|string|max:255',
            'facebook'       => 'nullable|string|max:255',
            'youtube'        => 'nullable|string|max:255',
            'instagram'      => 'nullable|string|max:255',
            'map_link'       => 'nullable|string|max:255',
            'rating'         => 'nullable|numeric|min:0|max:9.9',
            'reviews_count'  => 'nullable|integer|min:0',
        ]);

        $contact->update($validated);

        return response()->json($contact);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(['message' => 'Contact deleted successfully']);
    }
}