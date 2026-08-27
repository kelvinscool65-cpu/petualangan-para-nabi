import React, { useState, useEffect } from 'react';
import { Head, Link } from '@inertiajs/react';
import { route } from 'ziggy-js';

export default function Welcome({ auth, stats }) {
    const user = auth?.user;

    // Daftar kalimat untuk efek running text / animasi mengetik secara bergantian
    const messages = [
        user ? `Ahlan wa Sahlan, ${user.name}. Siap melanjutkan ekspedisi iman hari ini?` : "Ahlan wa Sahlan, Penjelajah. Siap melanjutkan ekspedisi iman hari ini?",
        "Jelajahi kisah inspiratif dan mukjizat 25 Nabi Allah SWT secara interaktif.",
        "Temukan hikmah mendalam dari setiap perjalanan para utusan pilihan.",
        "Uji pemahamanmu lewat kuis menarik di setiap akhir kisah para Nabi."
    ];

    const [currentMsgIndex, setCurrentMsgIndex] = useState(0);
    const [displayedText, setDisplayedText] = useState('');
    const [isDeleting, setIsDeleting] = useState(false);
    const [typingSpeed, setTypingSpeed] = useState(100);

    useEffect(() => {
        const fullText = messages[currentMsgIndex];

        const handleTyping = () => {
            if (!isDeleting) {
                setDisplayedText(fullText.substring(0, displayedText.length + 1));
                if (displayedText === fullText) {
                    setTimeout(() => setIsDeleting(true), 2500);
                    setTypingSpeed(50);
                }
            } else {
                setDisplayedText(fullText.substring(0, displayedText.length - 1));
                if (displayedText === '') {
                    setIsDeleting(false);
                    setCurrentMsgIndex((prev) => (prev + 1) % messages.length);
                    setTypingSpeed(100);
                }
            }
        };

        const timer = setTimeout(handleTyping, typingSpeed);
        return () => clearTimeout(timer);
    }, [displayedText, isDeleting, currentMsgIndex, messages]);

    // Generate bintang-bintang latar belakang
    const stars = Array.from({ length: 80 }, (_, i) => ({
        id: i,
        left: Math.random() * 100,
        top: Math.random() * 100,
        size: Math.random() * 3 + 1,
        opacity: Math.random() * 0.8 + 0.2,
        delay: Math.random() * 5,
        duration: Math.random() * 3 + 2,
    }));

    return (
        <div className="relative min-h-screen bg-[#070b19] text-amber-100 flex flex-col justify-between overflow-hidden font-sans select-none">
            <Head title="Petualangan Para Nabi" />

            {/* === LAPISAN BINTANG === */}
            <div className="absolute inset-0 pointer-events-none overflow-hidden">
                {stars.map((star) => (
                    <div
                        key={star.id}
                        className="absolute rounded-full bg-white"
                        style={{
                            left: `${star.left}%`,
                            top: `${star.top}%`,
                            width: `${star.size}px`,
                            height: `${star.size}px`,
                            opacity: star.opacity,
                            animation: `twinkle ${star.duration}s ease-in-out ${star.delay}s infinite alternate`,
                            boxShadow: '0 0 6px 2px rgba(255,215,0,0.3)',
                        }}
                    />
                ))}
            </div>

            {/* === LAPISAN GRADASI DINAMIS === */}
            <div className="absolute inset-0 pointer-events-none bg-gradient-to-b from-[#0a0f1f] via-[#111a2e] to-[#070b19] opacity-90"></div>
            <div className="absolute inset-0 pointer-events-none bg-[radial-gradient(ellipse_at_center,_rgba(245,158,11,0.08)_0%,_transparent_70%)]"></div>

            {/* === HEADER === */}
            <header className="relative z-10 flex justify-between items-center px-8 py-6 max-w-7xl mx-auto w-full">
                <div className="flex items-center gap-3">
                    <div className="w-12 h-12 rounded-full border-2 border-amber-400/60 flex items-center justify-center bg-gradient-to-br from-amber-500/20 to-amber-700/20 shadow-[0_0_30px_rgba(245,158,11,0.2)] backdrop-blur-sm">
                        <span className="text-amber-400 font-bold text-xl">🕌</span>
                    </div>
                    <div>
                        <h1 className="text-sm font-bold tracking-widest text-amber-400 uppercase drop-shadow-[0_0_10px_rgba(245,158,11,0.3)]">
                            Petualangan Para Nabi
                        </h1>
                        <p className="text-[10px] tracking-widest text-amber-200/50 font-arabic">مغادرة الأنبياء</p>
                    </div>
                </div>

                <div className="flex items-center gap-4">
                    {user ? (
                        <Link
                            href={route('map')}
                            className="px-6 py-2.5 rounded-lg bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold hover:from-amber-400 hover:to-amber-500 transition shadow-[0_0_25px_rgba(245,158,11,0.5)] hover:shadow-[0_0_40px_rgba(245,158,11,0.7)] transform hover:scale-105"
                        >
                            Masuk ke Peta
                        </Link>
                    ) : (
                        <>
                            <Link
                                href={route('login')}
                                className="px-5 py-2 text-xs font-bold tracking-widest text-amber-300 border border-amber-500/40 rounded-md hover:bg-amber-500/10 transition backdrop-blur-sm"
                            >
                                MASUK
                            </Link>
                            <Link
                                href={route('register')}
                                className="px-5 py-2 text-xs font-bold tracking-widest text-slate-950 bg-gradient-to-r from-amber-400 to-amber-500 rounded-md hover:from-amber-300 hover:to-amber-400 transition shadow-[0_0_20px_rgba(245,158,11,0.4)] hover:shadow-[0_0_30px_rgba(245,158,11,0.6)] transform hover:scale-105"
                            >
                                DAFTAR
                            </Link>
                        </>
                    )}
                </div>
            </header>

            {/* === MAIN CONTENT === */}
            <main className="relative z-10 flex flex-col items-center text-center px-4 my-auto">
                {/* Ornamen Emas Atas */}
                <div className="flex items-center gap-4 mb-4">
                    <span className="h-px w-12 bg-gradient-to-r from-transparent to-amber-500/60"></span>
                    <span className="text-amber-400/60 text-lg">✦</span>
                    <span className="h-px w-12 bg-gradient-to-l from-transparent to-amber-500/60"></span>
                </div>

                <p className="text-amber-400/90 text-3xl md:text-4xl font-arabic mb-4 tracking-wide drop-shadow-[0_0_20px_rgba(245,158,11,0.2)]">
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                </p>

                <div className="relative">
                    <span className="absolute -top-8 left-1/2 -translate-x-1/2 text-amber-400 text-3xl animate-pulse">★</span>
                    <h2 className="text-5xl md:text-7xl font-extrabold tracking-wider text-transparent bg-clip-text bg-gradient-to-b from-amber-200 via-amber-400 to-amber-600 drop-shadow-[0_10px_30px_rgba(245,158,11,0.3)]">
                        PETUALANGAN
                    </h2>
                    <h2 className="text-5xl md:text-7xl font-extrabold tracking-wider text-transparent bg-clip-text bg-gradient-to-b from-amber-200 via-amber-400 to-amber-600 drop-shadow-[0_10px_30px_rgba(245,158,11,0.3)] mt-1 font-serif">
                        PARA NABI
                    </h2>
                </div>

                <div className="flex items-center gap-3 mt-4 text-amber-300/80 text-xs tracking-widest uppercase">
                    <span className="h-[1px] w-16 bg-gradient-to-r from-transparent to-amber-500/40"></span>
                    <span className="font-medium tracking-[0.25em]">✦ Jelajahi Kisah 25 Nabi ✦</span>
                    <span className="h-[1px] w-16 bg-gradient-to-l from-transparent to-amber-500/40"></span>
                </div>

                {/* Kotak Animasi Mengetik - Lebih Elegan */}
                <div className="mt-10 w-full max-w-2xl bg-[#0d1326]/70 border border-amber-500/20 rounded-2xl py-4 px-8 shadow-[0_8px_32px_rgba(0,0,0,0.6)] backdrop-blur-xl min-h-[60px] flex items-center justify-center relative overflow-hidden">
                    <div className="absolute inset-0 bg-gradient-to-r from-amber-500/5 via-transparent to-amber-500/5"></div>
                    <p className="text-amber-200/90 text-base md:text-lg italic tracking-wide relative z-10">
                        {displayedText}
                        <span className="animate-pulse text-amber-400 font-bold ml-1 text-xl">|</span>
                    </p>
                </div>

                {/* Panel Statistik - Dengan Glassmorphism */}
                <div className="flex items-center justify-center gap-20 md:gap-28 mt-12 text-center">
                    <div className="group">
                        <p className="text-3xl md:text-4xl font-bold text-amber-400 drop-shadow-[0_0_20px_rgba(245,158,11,0.3)] transition-all group-hover:scale-110 group-hover:text-amber-300">
                            {stats.nabi_dipelajari}/25
                        </p>
                        <p className="text-[10px] md:text-xs tracking-[0.2em] text-amber-200/50 uppercase mt-2">Nabi Dipelajari</p>
                    </div>
                    <div className="w-px h-10 bg-gradient-to-b from-transparent via-amber-500/30 to-transparent"></div>
                    <div className="group">
                        <p className="text-3xl md:text-4xl font-bold text-amber-400 drop-shadow-[0_0_20px_rgba(245,158,11,0.3)] transition-all group-hover:scale-110 group-hover:text-amber-300">
                            {stats.hari_beruntung}
                        </p>
                        <p className="text-[10px] md:text-xs tracking-[0.2em] text-amber-200/50 uppercase mt-2">Hari Beruntung</p>
                    </div>
                </div>

                {/* Tombol Aksi - Dengan Efek Mewah */}
                <div className="flex flex-col sm:flex-row items-center gap-6 mt-12">
                    <Link
                        href={user ? route('map') : route('login')}
                        className="flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold rounded-2xl hover:from-amber-400 hover:to-amber-500 transition-all shadow-[0_0_40px_rgba(245,158,11,0.4)] hover:shadow-[0_0_60px_rgba(245,158,11,0.7)] transform hover:scale-105 hover:-translate-y-1"
                    >
                        <span className="text-xl">▶</span> MULAI PETUALANGAN
                    </Link>
                    <Link
                        href={user ? route('map') : route('login')}
                        className="flex items-center gap-3 px-8 py-5 bg-[#0d1326]/80 border border-amber-500/30 text-amber-300 font-semibold rounded-2xl hover:bg-amber-500/10 transition-all shadow-[0_0_20px_rgba(0,0,0,0.3)] hover:shadow-[0_0_30px_rgba(245,158,11,0.2)] transform hover:scale-105 hover:-translate-y-1 backdrop-blur-sm"
                    >
                        <span className="text-xl">🏛</span> PILIH KISAH NABI
                    </Link>
                </div>

                {/* Ornamen Emas Bawah */}
                <div className="mt-16 flex items-center gap-4 opacity-40">
                    <span className="h-px w-20 bg-gradient-to-r from-transparent to-amber-500/40"></span>
                    <span className="text-amber-400/60 text-sm">★</span>
                    <span className="h-px w-20 bg-gradient-to-l from-transparent to-amber-500/40"></span>
                </div>
            </main>

            {/* === FOOTER === */}
            <footer className="relative z-10 w-full pt-12">
                <div className="text-center text-amber-400/50 text-sm mb-3 tracking-widest">✦</div>
                <div className="h-20 w-full bg-gradient-to-t from-[#03050c] to-transparent flex justify-around items-end opacity-70 pointer-events-none">
                    <div className="w-20 h-10 bg-gradient-to-t from-slate-900 to-transparent rounded-t-full"></div>
                    <div className="w-14 h-14 bg-gradient-to-t from-slate-900 to-transparent rounded-t-full relative">
                        <div className="absolute -top-4 left-1/2 -translate-x-1/2 w-1 h-4 bg-slate-900"></div>
                    </div>
                    <div className="w-28 h-16 bg-gradient-to-t from-slate-900 to-transparent rounded-t-full"></div>
                    <div className="w-14 h-14 bg-gradient-to-t from-slate-900 to-transparent rounded-t-full"></div>
                    <div className="w-20 h-10 bg-gradient-to-t from-slate-900 to-transparent rounded-t-full"></div>
                </div>
            </footer>

            {/* ===== GLOBAL ANIMATION STYLES ===== */}
            <style jsx>{`
                @keyframes twinkle {
                    0% { opacity: 0.2; transform: scale(0.8); }
                    100% { opacity: 1; transform: scale(1.2); }
                }
            `}</style>
        </div>
    );
}