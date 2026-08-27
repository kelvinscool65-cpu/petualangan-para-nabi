<?php

namespace App\Http\Controllers;

use App\Models\Prophet;
use App\Models\Material; // tambahkan use
use Inertia\Inertia;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function show($prophetId)
    {
        // 1. Pastikan parameter berupa integer
        $prophetId = (int) $prophetId;

        // 2. Cari nabi berdasarkan id atau urutan_nabi
        $prophetData = Prophet::with(['materials' => function ($query) {
            $query->orderBy('bab_ke', 'asc');
        }])
        ->where(function ($query) use ($prophetId) {
            $query->where('id', $prophetId)
                  ->orWhere('urutan_nabi', $prophetId);
        })
        ->first();

        // 3. Jika tidak ditemukan, coba hanya berdasarkan urutan_nabi
        if (!$prophetData) {
            $prophetData = Prophet::where('urutan_nabi', $prophetId)->first();
            if ($prophetData) {
                $prophetData->load(['materials' => function ($q) {
                    $q->orderBy('bab_ke', 'asc');
                }]);
            }
        }

        // 4. Jika tetap tidak ditemukan, buat fallback dummy
        if (!$prophetData) {
            $daftarNabi = [
                1 => 'Adam', 2 => 'Idris', 3 => 'Nuh', 4 => 'Hud', 5 => 'Shaleh',
                6 => 'Ibrahim', 7 => 'Luth', 8 => 'Ismail', 9 => 'Ishaq', 10 => 'Yaqub',
                11 => 'Yusuf', 12 => 'Ayyub', 13 => 'Syuaib', 14 => 'Musa', 15 => 'Harun',
                16 => 'Zulkifli', 17 => 'Daud', 18 => 'Sulaiman', 19 => 'Ilyas', 20 => 'Ilyasa',
                21 => 'Yunus', 22 => 'Zakariya', 23 => 'Yahya', 24 => 'Isa', 25 => 'Muhammad'
            ];
            $nama = $daftarNabi[$prophetId] ?? 'Pilihan';

            $prophetData = new Prophet();
            $prophetData->id = $prophetId;
            $prophetData->urutan_nabi = $prophetId;
            $prophetData->nama_nabi = $nama;
            $prophetData->deskripsi = "Kisah teladan dan perjalanan dakwah penuh hikmah Nabi {$nama}.";
            $prophetData->setRelation('materials', collect());
        }

        // 5. Pastikan materials dimuat, jika kosong ambil manual dari database
        if ($prophetData->materials->isEmpty()) {
            // Coba ambil langsung dari tabel materials berdasarkan prophet_id
            $manualMaterials = Material::where('prophet_id', $prophetData->id)
                ->orderBy('bab_ke', 'asc')
                ->get();

            if ($manualMaterials->isNotEmpty()) {
                $prophetData->setRelation('materials', $manualMaterials);
            } else {
                // Jika tetap kosong, buat materi dummy agar halaman tidak kosong
                $dummyMaterial = new Material([
                    'bab_ke'    => 1,
                    'judul_bab' => 'Pendahuluan',
                    'teks'      => 'Materi untuk nabi ini sedang disiapkan. Silakan kembali lagi nanti.',
                ]);
                $prophetData->setRelation('materials', collect([$dummyMaterial]));
            }
        }

        // 6. Kirim data ke React
        return Inertia::render('Prophet/Material', [
            'prophet' => [
                'id'          => $prophetData->id,
                'nama_nabi'   => $prophetData->nama_nabi,
                'deskripsi'   => $prophetData->deskripsi,
                'urutan_nabi' => $prophetData->urutan_nabi,
                'materials'   => $prophetData->materials->map(function ($material) {
                    return [
                        'id'          => $material->id,
                        'bab_ke'      => $material->bab_ke,
                        'judul_bab'   => $material->judul_bab,
                        'teks'        => $material->teks ?? 'Teks tidak tersedia',
                        'audio_path'  => $material->audio_path,
                        'video_url'   => $material->video_url,
                    ];
                })->toArray(),
            ],
            'materials' => $prophetData->materials->map(function ($material) {
                return [
                    'id'          => $material->id,
                    'bab_ke'      => $material->bab_ke,
                    'judul_bab'   => $material->judul_bab,
                    'teks'        => $material->teks ?? 'Teks tidak tersedia',
                    'audio_path'  => $material->audio_path,
                    'video_url'   => $material->video_url,
                ];
            })->toArray(),
        ]);
    }
}