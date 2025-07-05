<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buat kunci rate limiter berdasarkan IP + email
        $key = Str::lower('login|' . $request->ip() . '|' . $request->email);

        // Cek apakah terlalu banyak percobaan login
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()->withErrors([
                'email' => "Terlalu banyak percobaan login. Coba lagi dalam $seconds detik.",
            ]);
        }

        // Coba login
        if (Auth::guard('admin')->attempt($credentials)) {
            RateLimiter::clear($key); // Bersihkan percobaan jika berhasil
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        // Tambahkan 1 percobaan gagal
        RateLimiter::hit($key, 60); // Expire dalam 60 detik

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
