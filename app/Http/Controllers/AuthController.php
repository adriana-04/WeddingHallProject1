<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            session([
                'user_id' => $user->id,
                'username' => $user->username,
                'role' => $user->role,
            ]);

            return redirect()->route('home')->with('success', 'Welcome back, '.$user->username.'!');
        }

        return back()->with('error', 'Invalid username or password.');
    }
}
