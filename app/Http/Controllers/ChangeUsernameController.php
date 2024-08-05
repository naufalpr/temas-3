<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ChangeUsernameController extends Controller
{
    public function edit()
    {
        return view('dashboard.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'new_username' => 'required|string|min:3|max:255|unique:users,username',
        ]);

        $user = auth()->user()->username;
        $user->username = $request->input('new_username');
        $user->save();

        return redirect()->back()->with('success', 'Username changed successfully!');
    }
}

