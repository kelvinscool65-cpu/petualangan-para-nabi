// File: resources/js/Pages/Certificate/Show.jsx
import React from 'react';
import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';

export default function CertificateShow({ certificate }) {
    // Format Tanggal: "12 Agustus 2024"
    const formattedDate = new Date(certificate.tanggal_tamat).toLocaleDateString('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });

    return (
        <AppLayout>
            <Head title="Sertifikat Kelulusan" />
            
            <div className="max-w-4xl mx-auto mt-12 flex flex-col items-center">
                <div className="text-center mb-8">
                    <h1 className="text-4xl font-black text-yellow-400 drop-shadow-md mb-2">Selamat! Kamu Berhasil Menyelesaikan Perjalanan</h1>
                    <p className="text-gray-300">Sertifikat ini adalah bukti dedikasi kamu dalam mempelajari kisah 25 Nabi.</p>
                </div>

                {/* Certificate Container with Flip Animation */}
                <div className="w-full relative card-flip-in p-2 rounded-2xl bg-gradient-to-br from-yellow-400 via-yellow-600 to-yellow-800 shadow-[0_0_40px_rgba(234,179,8,0.4)]">
                    <div className="bg-slate-900 w-full rounded-xl p-10 md:p-16 border-4 border-dashed border-yellow-500/50 flex flex-col items-center text-center relative overflow-hidden">
                        
                        {/* Background Watermark */}
                        <div className="absolute inset-0 flex items-center justify-center opacity-5 pointer-events-none">
                            <svg className="w-96 h-96" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                            </svg>
                        </div>

                        {/* Top Badge */}
                        <div className="w-24 h-24 mb-6 bg-gradient-to-r from-yellow-300 to-yellow-600 rounded-full flex items-center justify-center shadow-lg border-4 border-slate-900 z-10">
                            <svg className="w-12 h-12 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                                <path fillRule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clipRule="evenodd" />
                            </svg>
                        </div>

                        <h2 className="text-2xl tracking-widest text-yellow-500 uppercase font-bold mb-2 z-10">Sertifikat Kelulusan</h2>
                        <p className="text-gray-400 mb-8 z-10">Diberikan Dengan Bangga Kepada:</p>
                        
                        <h1 className="text-4xl md:text-6xl font-serif text-white mb-8 border-b-2 border-yellow-600/50 pb-4 inline-block z-10">
                            {certificate.user.nama_lengkap}
                        </h1>
                        
                        <p className="text-gray-300 max-w-xl mx-auto mb-12 text-lg z-10">
                            Telah berhasil menyelesaikan seluruh materi pembelajaran dan ujian kompetensi kisah 25 Nabi dalam aplikasi Petualangan Para Nabi dengan hasil yang sangat memuaskan.
                        </p>

                        <div className="flex justify-between w-full max-w-2xl px-8 z-10">
                            <div className="text-left">
                                <p className="text-gray-500 text-sm">Nomor Sertifikat</p>
                                <p className="text-yellow-400 font-mono">{certificate.nomor_sertifikat}</p>
                            </div>
                            <div className="text-right">
                                <p className="text-gray-500 text-sm">Tanggal Tamat</p>
                                <p className="text-yellow-400">{formattedDate}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="mt-10 flex space-x-4">
                    <button onClick={() => window.print()} className="btn-cta bg-white text-gray-900 border-none flex items-center gap-2">
                        <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        Cetak / Download PDF
                    </button>
                    <Link href="/map" className="px-8 py-3 rounded-full border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-gray-900 transition font-bold">
                        Kembali ke Peta
                    </Link>
                </div>
            </div>
        </AppLayout>
    );
}