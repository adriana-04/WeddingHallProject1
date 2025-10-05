<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'username' => $data['username'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'role'     => $data['username'] === 'admin' ? 'admin' : 'user',
        ]);

        // login simulation: store user id & username in session
        session([
            'user_id' => $user->id,
            'username' => $user->username,
            'role' => $user->role,
        ]);

        return redirect()->route('home')->with('success', 'Registration successful.');
    }
}
