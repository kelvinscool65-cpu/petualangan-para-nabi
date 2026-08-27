// File: resources/js/Pages/Prophet/Material.jsx
import React, { useState, useEffect } from 'react';
import { Head, Link } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';

// Daftar URL YouTube Animasi Kisah 25 Nabi (Bahasa Indonesia) — dalam format pendek
const YOUTUBE_VIDEOS = {
    1: 'https://youtu.be/e4_pchHE3ss',
    2: 'https://youtu.be/g6S2GkQFBoU',
    3: 'https://youtu.be/m9nYuVSSUx0',
    4: 'https://youtu.be/akBtsPjHOTg',
    5: 'https://youtu.be/CpkhXOs3xlw',
    6: 'https://youtu.be/0x15N2W-8fo',
    7: 'https://youtu.be/8fvIEwpr3OQ',
    8: 'https://youtu.be/k-p1xsHFypQ',
    9: 'https://youtu.be/REOtD421d5g',
    10: 'https://youtu.be/F-Q0Sb6W6Sg',
    11: 'https://youtu.be/JpHI1laca-U',
    12: 'https://youtu.be/HXxxmIzdPYc',
    13: 'https://youtu.be/yDR01h2ga0Q',
    14: 'https://youtu.be/s2cV0an9Uj8',
    15: 'https://youtu.be/FGaqYtFQgEo',
    16: 'https://youtu.be/HhoZexh5jUQ',
    17: 'https://youtu.be/7jTMFOoA_c0',
    18: 'https://youtu.be/YUiST3wPuNM',
    19: 'https://youtu.be/N-MvzIEVDQg',
    20: 'https://youtu.be/w2H1uuJ5Mf0',
    21: 'https://youtu.be/z7wZs9RpdrU',
    22: 'https://youtu.be/dCWd4h8vNhg',
    23: 'https://youtu.be/w0eRBOy9P2s',
    24: 'https://youtu.be/smy348E0Ad8',
    25: 'https://youtu.be/ee9kk_12sUQ',
};

// Fungsi helper untuk mengubah berbagai format link YouTube menjadi format embed yang valid
const getEmbedUrl = (url) => {
    if (!url) return 'https://www.youtube.com/embed/5qap5aO4i9A';
    if (url.includes('/embed/')) return url;

    let videoId = '';
    if (url.includes('youtu.be/')) {
        videoId = url.split('youtu.be/')[1]?.split('?')[0];
    } else if (url.includes('watch?v=')) {
        videoId = url.split('watch?v=')[1]?.split('&')[0];
    }
    return videoId ? `https://www.youtube.com/embed/${videoId}` : 'https://www.youtube.com/embed/5qap5aO4i9A';
};

export default function Material({ prophet, materials: materialsProp = [] }) {
    // Gunakan materials dari prop jika ada, fallback ke prophet.materials
    const materials = materialsProp.length > 0 ? materialsProp : (prophet?.materials || []);
    const [activeTab, setActiveTab] = useState(0);
    const [isSpeaking, setIsSpeaking] = useState(false);

    const currentMaterial = materials[activeTab] || materials[0] || {};
    const prophetUrutan = prophet?.urutan_nabi || 1;
    const isLastTab = activeTab === materials.length - 1;

    // Logika gelar – untuk Nabi Muhammad menggunakan SAW, lainnya a.s.
    const prophetName = prophet?.nama_nabi || 'Pilihan';
    const gelar = prophetName.toLowerCase() === 'muhammad' ? 'SAW' : 'a.s.';

    const toggleSpeech = () => {
        if (!('speechSynthesis' in window)) {
            alert('Browser Anda tidak mendukung fitur audio narasi.');
            return;
        }

        if (isSpeaking) {
            window.speechSynthesis.cancel();
            setIsSpeaking(false);
        } else {
            window.speechSynthesis.cancel();
            const teks = currentMaterial.teks || '';
            if (!teks) {
                alert('Teks tidak tersedia untuk dibacakan.');
                return;
            }
            const speech = new SpeechSynthesisUtterance(teks);
            speech.lang = 'id-ID';
            speech.rate = 0.9;

            speech.onend = () => setIsSpeaking(false);
            speech.onerror = () => setIsSpeaking(false);

            window.speechSynthesis.speak(speech);
            setIsSpeaking(true);
        }
    };

    useEffect(() => {
        return () => {
            if ('speechSynthesis' in window) {
                window.speechSynthesis.cancel();
            }
        };
    }, [activeTab]);

    // 🔥 Perbaikan: Tampilan lebih informatif jika materi kosong
    if (!materials || materials.length === 0) {
        return (
            <AppLayout>
                <Head title={`Materi - ${prophetName}`} />
                <div className="max-w-4xl mx-auto mt-12 px-4 text-center text-amber-100">
                    <h1 className="text-3xl font-extrabold text-amber-400 mb-4">
                        Kisah Nabi {prophetName}
                    </h1>
                    <p className="text-lg mb-6">
                        {prophet?.deskripsi || 'Materi untuk nabi ini belum tersedia.'}
                    </p>
                    <Link href="/map" className="px-6 py-2 bg-amber-500 text-black font-bold rounded-lg hover:bg-amber-400 transition">
                        Kembali ke Peta
                    </Link>
                </div>
            </AppLayout>
        );
    }

    return (
        <AppLayout>
            <Head title={`Kisah Nabi ${prophetName}`} />

            <div className="max-w-4xl mx-auto px-4 pt-6 pb-20 text-amber-100">
                <div className="mb-6">
                    <Link
                        href="/map"
                        className="inline-flex items-center gap-2 px-4 py-2 text-xs font-bold tracking-widest text-amber-300 border border-amber-500/40 rounded-lg bg-[#0d1326]/80 hover:bg-amber-500/10 transition shadow-lg backdrop-blur-md"
                    >
                        <span>←</span> KEMBALI KE PETA
                    </Link>
                </div>

                <div className="text-center mb-8">
                    <p className="text-yellow-400 text-xs tracking-widest uppercase mb-1">Nabi Ke-{prophetUrutan} dari 25 Nabi</p>
                    <h1 className="text-3xl md:text-4xl font-extrabold text-amber-400">
                        Kisah Nabi {prophetName} {gelar}
                    </h1>
                    <p className="text-sm text-gray-300 mt-2">{prophet?.deskripsi}</p>
                </div>

                <div className="flex flex-wrap justify-center gap-3 mb-8">
                    {materials.map((mat, index) => (
                        <button
                            key={mat.id || index}
                            onClick={() => {
                                if ('speechSynthesis' in window) window.speechSynthesis.cancel();
                                setActiveTab(index);
                                setIsSpeaking(false);
                            }}
                            className={`px-5 py-2.5 rounded-xl font-semibold text-xs tracking-wider transition-all border ${
                                activeTab === index
                                    ? 'bg-amber-500 text-slate-950 border-amber-400 shadow-[0_0_15px_rgba(245,158,11,0.5)]'
                                    : 'bg-[#0d1326] text-amber-200 border-amber-500/30 hover:bg-amber-500/10'
                            }`}
                        >
                            Bab {mat.bab_ke}: {mat.judul_bab}
                        </button>
                    ))}
                </div>

                <div className="bg-[#0d1326]/90 border border-amber-500/30 rounded-2xl p-6 md:p-8 shadow-2xl backdrop-blur-md">
                    <div className="border-l-4 border-amber-500 pl-4 mb-6">
                        <h2 className="text-xl md:text-2xl font-bold text-amber-400">
                            {currentMaterial.judul_bab}
                        </h2>
                    </div>

                    <div className="text-gray-200 text-base md:text-lg leading-relaxed whitespace-pre-line mb-8">
                        {currentMaterial.teks || 'Teks tidak tersedia.'}
                    </div>

                    <div className="bg-[#03050c] border border-amber-500/30 rounded-xl p-4 flex items-center justify-between mb-8 shadow-inner">
                        <div className="flex items-center gap-4">
                            <button
                                onClick={toggleSpeech}
                                className={`w-12 h-12 rounded-full flex items-center justify-center font-bold transition transform hover:scale-105 shadow-[0_0_15px_rgba(245,158,11,0.4)] ${
                                    isSpeaking
                                        ? 'bg-red-500 text-white animate-pulse'
                                        : 'bg-amber-500 text-slate-950 hover:bg-amber-400'
                                }`}
                            >
                                {isSpeaking ? '⏹' : '▶'}
                            </button>
                            <div>
                                <p className="text-xs uppercase tracking-widest text-amber-400 font-bold">Audio Narasi Otomatis</p>
                                <p className="text-xs text-gray-300">Dengarkan suara narator membacakan bab ini</p>
                            </div>
                        </div>
                        <span className="text-xs text-amber-400/80 italic font-semibold">
                            {isSpeaking ? '🔊 Sedang membacakan...' : '▶ Putar Audio'}
                        </span>
                    </div>

                    {isLastTab && (
                        <div className="mt-8 pt-6 border-t border-amber-500/20">
                            <h3 className="text-lg font-bold text-amber-400 mb-4 flex items-center gap-2">
                                <span>📺</span> Video Animasi Kisah Nabi {prophetName} (Bahasa Indonesia)
                            </h3>
                            <div className="relative w-full aspect-video rounded-xl overflow-hidden border border-amber-500/40 shadow-lg bg-black">
                                <iframe
                                    src={getEmbedUrl(YOUTUBE_VIDEOS[prophetUrutan])}
                                    title={`Video Animasi Nabi ${prophetName}`}
                                    className="absolute inset-0 w-full h-full"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowFullScreen
                                ></iframe>
                            </div>
                        </div>
                    )}
                </div>

                <div className="flex justify-between items-center mt-8">
                    <button
                        onClick={() => {
                            if ('speechSynthesis' in window) window.speechSynthesis.cancel();
                            setActiveTab((prev) => Math.max(0, prev - 1));
                            setIsSpeaking(false);
                        }}
                        disabled={activeTab === 0}
                        className={`px-6 py-3 rounded-xl font-semibold text-xs tracking-wider border transition ${
                            activeTab === 0
                                ? 'opacity-40 cursor-not-allowed border-gray-700 text-gray-500'
                                : 'border-amber-500/40 text-amber-300 hover:bg-amber-500/10'
                        }`}
                    >
                        ← Bab Sebelumnya
                    </button>

                    {activeTab < materials.length - 1 ? (
                        <button
                            onClick={() => {
                                if ('speechSynthesis' in window) window.speechSynthesis.cancel();
                                setActiveTab((prev) => Math.min(materials.length - 1, prev + 1));
                                setIsSpeaking(false);
                            }}
                            className="px-8 py-3 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold rounded-xl hover:from-amber-400 hover:to-amber-500 transition shadow-[0_0_20px_rgba(245,158,11,0.4)]"
                        >
                            Bab Selanjutnya →
                        </button>
                    ) : (
                        <Link
                            href={`/prophet/${prophet.id}/quiz`}
                            className="px-8 py-3 bg-gradient-to-r from-amber-400 to-amber-500 text-slate-950 font-extrabold rounded-xl hover:from-amber-300 hover:to-amber-400 transition shadow-[0_0_25px_rgba(245,158,11,0.6)] animate-pulse"
                        >
                            Lanjut ke Kuis Nabi {prophetName} →
                        </Link>
                    )}
                </div>
            </div>
        </AppLayout>
    );
}