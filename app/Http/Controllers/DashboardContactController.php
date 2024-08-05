<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.contact.index', [
            'contacts' => Contact::latest()->paginate(10)
        ]);
    }

    public function show(Contact $contact)
     {
         return view('dashboard.contact.show', [
             'contact' => $contact
         ]);
     }

    public function destroy(Contact $contact)
    {
        Contact::destroy($contact->id);
        return redirect('/dashboard/contact')->with('success', 'Pesan berhasil dihapus');
    }

}
