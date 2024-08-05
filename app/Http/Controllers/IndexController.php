<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;

class IndexController extends Controller
{
    public function index() {
        return view('index', [
            "title" => "News",
            "news" => News::with(['user'])->latest()->paginate(4),
            "galleries" => Gallery::with(['user'])->latest()->paginate(8),
            "announcement" => Announcement::with(['user'])->latest()->paginate(4)
        ]);
    }
}