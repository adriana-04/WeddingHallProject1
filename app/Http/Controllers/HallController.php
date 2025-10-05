<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;

class HallController extends Controller
{
    public function create()
    {
        return view('hall_register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'hall_name' => 'required|string|max:255',
            'location'  => 'required|string|max:255',
        ]);

        $userId = session('user_id'); // expects user logged in
        // optionally block if not logged in:
        // if (!$userId) return redirect()->route('register')->with('error','Please register/login first.');

        Hall::create([
            'hall_name' => $data['hall_name'],
            'location'  => $data['location'],
            'user_id'   => $userId,
        ]);

        // If you prefer to show all halls in session (like your current design), you can skip session part
        return redirect()->route('home')->with('success', 'Hall registration completed.');
    }
}
