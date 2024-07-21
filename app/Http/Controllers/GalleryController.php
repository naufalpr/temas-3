<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;


class GalleryController extends Controller
{
    public function index() {
        return view('Code/informasiPublik/galeri', [
            "title" => "Gallery",
            "galleries" => Gallery::with(['user'])->latest()->paginate(8)
        ]);
    }
}
