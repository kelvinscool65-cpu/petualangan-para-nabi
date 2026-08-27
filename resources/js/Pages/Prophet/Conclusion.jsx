import React from 'react';
import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';

export default function Conclusion({ prophet, score }) {
    // 🔥 Logika gelar – untuk Nabi Muhammad menggunakan SAW, lainnya a.s.
    const prophetName = prophet?.nama_nabi || 'Pilihan';
    const gelar = prophetName.toLowerCase() === 'muhammad' ? 'SAW' : 'a.s.';

    return (
        <AppLayout>
            <Head title={`Pencerahan - Nabi ${prophetName}`} />

            <div className="max-w-3xl mx-auto px-4 py-12 text-amber-100 text-center">
                <div className="bg-[#0d1326]/90 border border-amber-500/40 rounded-3xl p-8 md:p-12 shadow-2xl backdrop-blur-md">
                    <span className="text-4xl mb-4 inline-block">✨</span>
                    <h1 className="text-2xl md:text-3xl font-extrabold text-amber-400 mb-2 uppercase tracking-wide">
                        Pencerahan Iman & Hikmah
                    </h1>
                    <p className="text-sm text-amber-200/70 mb-6">
                        Perjalanan Kisah Nabi {prophetName} {gelar}
                    </p>

                    <div className="bg-black/40 border border-amber-500/20 rounded-2xl p-6 mb-8 text-left">
                        <p className="text-xs font-bold text-amber-400 uppercase tracking-widest mb-2">Pesan & Rujukan Hadis:</p>
                        <p className="text-sm md:text-base text-gray-200 italic leading-relaxed">
                            "Sesungguhnya pada kisah-kisah mereka itu terdapat pengajaran bagi orang-orang yang mempunyai akal. (Qur'an & Hadis Shahih)... Amalkan keteguhan iman dan kesabaran para utusan Allah dalam kehidupan sehari-hari."
                        </p>
                    </div>

                    <div className="flex flex-col sm:flex-row justify-center gap-4">
                        <Link
                            href="/map"
                            className="px-8 py-4 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold rounded-xl hover:from-amber-400 hover:to-amber-500 transition shadow-[0_0_25px_rgba(245,158,11,0.4)]"
                        >
                            Kembali ke Peta Perjalanan 🗺️
                        </Link>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}