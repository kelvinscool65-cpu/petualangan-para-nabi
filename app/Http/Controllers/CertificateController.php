<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function show(Request $request)
    {
        $certificate = Certificate::with('user')->where('user_id', $request->user()->id)->first();

        if (!$certificate) {
            return redirect()->route('map')->with('error', 'Sertifikat belum tersedia. Selesaikan semua perjalanan nabi terlebih dahulu.');
        }

        return Inertia::render('Certificate/Show', [
            'certificate' => $certificate
        ]);
    }
}