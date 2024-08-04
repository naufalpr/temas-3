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
            'contact' => Contact::latest()->get()
        ]);
    }

    public function destroy(Contact $contact)
    {
        Contact::destroy($contact->id);
        return redirect('/dashboard/contact')->with('success', 'Pesan berhasil dihapus');
    }

}
