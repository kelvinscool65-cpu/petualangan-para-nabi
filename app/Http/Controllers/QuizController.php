<?php

namespace App\Http\Controllers;

use App\Models\Prophet;
use App\Models\Question;
use App\Models\UserProgress;
use App\Models\Certificate;
use Inertia\Inertia;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Menampilkan halaman kuis dengan soal dari database.
     * Pencarian berdasarkan urutan_nabi, dengan fallback dummy jika data kosong.
     *
     * @param  int|string  $prophetId
     * @return \Inertia\Response
     */
    public function show($prophetId)
    {
        $prophetId = (int) $prophetId;

        // 1. Cari nabi beserta soal-soalnya (berdasarkan urutan_nabi)
        $prophet = Prophet::with('questions')->where('urutan_nabi', $prophetId)->first();

        // 2. Jika tidak ditemukan, buat fallback dari daftar 25 nabi
        if (!$prophet) {
            $daftarNabi = [
                1 => 'Adam', 2 => 'Idris', 3 => 'Nuh', 4 => 'Hud', 5 => 'Shaleh',
                6 => 'Ibrahim', 7 => 'Luth', 8 => 'Ismail', 9 => 'Ishaq', 10 => 'Yaqub',
                11 => 'Yusuf', 12 => 'Ayyub', 13 => 'Syuaib', 14 => 'Musa', 15 => 'Harun',
                16 => 'Zulkifli', 17 => 'Daud', 18 => 'Sulaiman', 19 => 'Ilyas', 20 => 'Ilyasa',
                21 => 'Yunus', 22 => 'Zakariya', 23 => 'Yahya', 24 => 'Isa', 25 => 'Muhammad'
            ];
            $nama = $daftarNabi[$prophetId] ?? 'Pilihan';

            $prophet = new Prophet();
            $prophet->id = $prophetId;
            $prophet->urutan_nabi = $prophetId;
            $prophet->nama_nabi = $nama;
            $prophet->deskripsi = "Kisah teladan dan perjalanan dakwah penuh hikmah Nabi {$nama}.";
            $prophet->setRelation('questions', collect()); // relasi kosong
        }

        // 3. Ambil soal, jika kosong buat 5 dummy agar tidak error
        $questions = $prophet->questions;
        if ($questions->isEmpty()) {
            $questions = collect([
                (object) ['id' => 1, 'pertanyaan' => 'Soal dummy 1', 'opsi_a' => 'Pilihan A', 'opsi_b' => 'Pilihan B', 'opsi_c' => 'Pilihan C', 'opsi_d' => 'Pilihan D', 'jawaban_benar' => 'A'],
                (object) ['id' => 2, 'pertanyaan' => 'Soal dummy 2', 'opsi_a' => 'Pilihan A', 'opsi_b' => 'Pilihan B', 'opsi_c' => 'Pilihan C', 'opsi_d' => 'Pilihan D', 'jawaban_benar' => 'B'],
                (object) ['id' => 3, 'pertanyaan' => 'Soal dummy 3', 'opsi_a' => 'Pilihan A', 'opsi_b' => 'Pilihan B', 'opsi_c' => 'Pilihan C', 'opsi_d' => 'Pilihan D', 'jawaban_benar' => 'C'],
                (object) ['id' => 4, 'pertanyaan' => 'Soal dummy 4', 'opsi_a' => 'Pilihan A', 'opsi_b' => 'Pilihan B', 'opsi_c' => 'Pilihan C', 'opsi_d' => 'Pilihan D', 'jawaban_benar' => 'D'],
                (object) ['id' => 5, 'pertanyaan' => 'Soal dummy 5', 'opsi_a' => 'Pilihan A', 'opsi_b' => 'Pilihan B', 'opsi_c' => 'Pilihan C', 'opsi_d' => 'Pilihan D', 'jawaban_benar' => 'A'],
            ]);
        }

        // 4. Kirim data ke komponen React Quiz/Show
        return Inertia::render('Quiz/Show', [
            'prophet' => [
                'id'          => $prophet->id,
                'nama_nabi'   => $prophet->nama_nabi,
                'deskripsi'   => $prophet->deskripsi ?? '',
                'urutan_nabi' => $prophet->urutan_nabi,
            ],
            'questions' => $questions->map(function ($q) {
                return [
                    'id'            => $q->id,
                    'pertanyaan'    => $q->pertanyaan,
                    'opsi_a'        => $q->opsi_a,
                    'opsi_b'        => $q->opsi_b,
                    'opsi_c'        => $q->opsi_c,
                    'opsi_d'        => $q->opsi_d,
                    'jawaban_benar' => $q->jawaban_benar, // dikirim ke frontend untuk validasi
                ];
            })->values()->toArray(),
        ]);
    }

    /**
     * Memproses submit kuis – menyimpan progress ke tabel user_progress,
     * membuka nabi berikutnya, dan generate sertifikat jika selesai semua.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int|string  $prophetId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request, $prophetId)
    {
        $user = $request->user();
        $currentId = (int) $prophetId;

        // 1. Tandai nabi saat ini sebagai 'completed' di tabel user_progress
        UserProgress::updateOrCreate(
            ['user_id' => $user->id, 'nabi_id' => $currentId],
            ['status' => 'completed']
        );

        // 2. Buka kunci nabi berikutnya (maksimal 25)
        $nextId = $currentId + 1;
        if ($nextId <= 25) {
            UserProgress::firstOrCreate(
                ['user_id' => $user->id, 'nabi_id' => $nextId],
                ['status' => 'unlocked']
            );
        }

        // 3. Jika ini nabi ke-25, generate sertifikat
        if ($nextId > 25) {
            $certificateExists = Certificate::where('user_id', $user->id)->exists();
            if (!$certificateExists) {
                $nomor_sertifikat = 'PPN-' . date('Ymd') . '-' . str_pad($user->id, 4, '0', STR_PAD_LEFT);
                Certificate::create([
                    'user_id'          => $user->id,
                    'nomor_sertifikat' => $nomor_sertifikat,
                    'tanggal_tamat'    => now(),
                ]);
            }
        }

        // 4. Arahkan ke halaman pencerahan (conclusion)
        return redirect()->route('conclusion.show', ['prophetId' => $currentId]);
    }
}