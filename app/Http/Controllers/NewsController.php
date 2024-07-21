<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class NewsController extends Controller
{
    public function index() {
        return view('Code/informasiPublik/berita', [
            "title" => "News",
            "news" => News::with(['user'])->latest()->paginate(7)
        ]);
    }

    public function show(News $news) {
        return view('Code/informasiPublik/beritaSingle', [
            "title" => "Single News",
            "news" => $news
        ]);
    }
}
