<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index() {
        return view('Code/informasiPublik/pengumuman', [
            "title" => "Announcement",
            "announcement" => Announcement::with(['user'])->latest()->paginate(7)
        ]);
    }

    public function show(Announcement $announcement) {
        return view('Code/informasiPublik/singleAnnouncement', [
            "title" => "Single Announcement",
            "announcement" => $announcement
        ]);
    }
}
