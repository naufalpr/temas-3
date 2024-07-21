<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;


class AgendaController extends Controller
{
    public function index() {
        return view('Code/informasiPublik/agendas', [
            "title" => "Agenda",
            "agenda" => Agenda::with(['user'])->latest()->paginate(7)
        ]);
    }

    public function show(Agenda $agenda) {
        return view('Code/informasiPublik/agenda', [
            "title" => "Single Agenda",
            "agenda" => $agenda
        ]);
    }
}
