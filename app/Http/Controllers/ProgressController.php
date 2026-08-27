<?php

namespace App\Http\Controllers;

use App\Models\Prophet;
use App\Models\UserProgress;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // jika menggunakan DB, atau bisa langsung pakai UserProgress

class ProgressController extends Controller
{
    /**
     * Menampilkan peta perjalanan nabi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Response
     */
    public function map(Request $request)
    {
        $user = $request->user();

        // 1. Ambil data progress dari tabel user_progress
        // Hasilnya berupa array asosiatif [nabi_id => status]
        $progressData = UserProgress::where('user_id', $user->id)
            ->pluck('status', 'nabi_id')
            ->toArray();

        // 2. Jika belum ada progress, set default: Nabi 1 = unlocked
        if (empty($progressData)) {
            $progressData[1] = 'unlocked';
        }

        // 3. Ambil semua nabi, urutkan berdasarkan urutan_nabi
        $prophets = Prophet::orderBy('urutan_nabi', 'asc')->get();

        // 4. Kirim ke React, sertakan auth dengan progress
        return Inertia::render('Map/Index', [
            'prophets' => $prophets,
            'auth' => [
                'user'     => $user,
                'progress' => $progressData, // 🔥 data progress dikirim di sini
            ],
        ]);
    }
}