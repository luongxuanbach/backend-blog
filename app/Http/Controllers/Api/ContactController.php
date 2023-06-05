<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        //get contact 
        $contacts = Contact::paginate(20);
        return view('admin.contact.list', compact('contacts'));
    }

    public function delete ($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Delete successfully '.$contact->name);
    }
}
