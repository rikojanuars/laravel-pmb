<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function loginProcess(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Login berhasil
            return redirect()->route('direct_dashboard');
        }

        // Login gagal
        return back()->withErrors([
            'message' => 'Username atau password salah',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}