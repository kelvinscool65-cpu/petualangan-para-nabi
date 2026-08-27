import React from 'react';
import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';

export default function Conclusion({ prophet, ayat, pelajaran }) {
    const { nama_nabi, urutan_nabi } = prophet || {};

    const isLastProphet = urutan_nabi >= 25;

    return (
        <AppLayout>
            <Head title={`Pencerahan - ${nama_nabi || 'Nabi'}`} />

            <div className="max-w-3xl mx-auto px-4 py-12 text-amber-100">
                <div className="bg-[#0d1326]/90 border border-amber-500/30 rounded-2xl p-8 shadow-2xl backdrop-blur-md">
                    <h1 className="text-3xl font-extrabold text-amber-400 text-center mb-6">
                        PENCERAHAN DARI KISAH
                    </h1>

                    {/* 🔥 Gunakan props dari controller */}
                    {ayat && (
                        <div className="border-l-4 border-amber-500 pl-6 py-4 my-6">
                            <p className="text-lg italic text-gray-300 leading-relaxed">
                                {ayat}
                            </p>
                        </div>
                    )}

                    {pelajaran && (
                        <div className="bg-[#03050c] border border-amber-500/30 rounded-xl p-6 my-8">
                            <p className="text-gray-200 text-base leading-relaxed">
                                {pelajaran}
                            </p>
                        </div>
                    )}

                    <div className="flex flex-wrap justify-center gap-4 mt-8">
                        {!isLastProphet && (
                            <Link
                                href={`/prophet/${urutan_nabi + 1}/material`}
                                className="px-8 py-3 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold rounded-xl hover:from-amber-400 hover:to-amber-500 transition shadow-[0_0_20px_rgba(245,158,11,0.4)]"
                            >
                                LANJUTKAN PERJALANAN →
                            </Link>
                        )}
                        <Link
                            href="/map"
                            className="px-6 py-3 border border-amber-500/40 text-amber-300 font-semibold rounded-xl hover:bg-amber-500/10 transition"
                        >
                            KEMBALI KE PETA
                        </Link>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}