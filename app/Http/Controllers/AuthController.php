<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prophet;
use App\Models\UserProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function showLogin()
    {
        return Inertia::render('Auth/Login');
    }

    /**
     * Proses login.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/map');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    /**
     * Menampilkan halaman registrasi.
     */
    public function showRegister()
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Proses registrasi – langsung login dan unlock Nabi pertama.
     */
    public function register(Request $request)
    {
        // 1. Validasi input (field 'name' sesuai dengan frontend)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. Buat user baru di database
        $user = User::create([
            'nama_lengkap' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // Jika menggunakan kolom 'progress' JSON, bisa ditambahkan di sini,
            // tapi kita akan gunakan tabel UserProgress terpisah.
        ]);

        // 3. Unlock Nabi pertama (urutan_nabi = 1) secara otomatis
        $firstProphet = Prophet::where('urutan_nabi', 1)->first();
        if ($firstProphet) {
            UserProgress::create([
                'user_id' => $user->id,
                'nabi_id' => $firstProphet->id,
                'status' => 'unlocked',
            ]);
        }

        // 4. Login user yang baru terdaftar
        Auth::login($user);
        $request->session()->regenerate();

        // 5. Redirect ke peta perjalanan
        return redirect()->route('map');
    }

    /**
     * Proses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}