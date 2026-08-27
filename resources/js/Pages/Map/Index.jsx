// File: resources/js/Pages/Map/Index.jsx
import React, { useEffect, useRef } from 'react';
import { Head, Link, usePage } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';

// Daftar resmi 25 Nama Nabi untuk memastikan label tidak pernah salah/hanya angka
const LIST_NAMA_NABI = [
    "Adam", "Idris", "Nuh", "Hud", "Shaleh", 
    "Ibrahim", "Luth", "Ismail", "Ishaq", "Yaqub", 
    "Yusuf", "Ayyub", "Syuaib", "Musa", "Harun", 
    "Zulkifli", "Daud", "Sulaiman", "Ilyas", "Ilyasa", 
    "Yunus", "Zakariya", "Yahya", "Isa", "Muhammad"
];

// Komponen Ikon Mukjizat Kustom untuk 25 Nabi Berdasarkan Al-Quran
function ProphetIcon({ urutan, isCompleted, isUnlocked }) {
    const iconClass = `w-8 h-8 ${isCompleted ? 'text-black' : isUnlocked ? 'text-yellow-300' : 'text-slate-500'}`;

    switch (urutan) {
        case 1: // Adam
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>;
        case 2: // Idris
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>;
        case 3: // Nuh (Bahtera)
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v12a2 2 0 01-2 2zM3 10h18M9 4v6m6-6v6"/></svg>;
        case 4: // Hud
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9.59 4.59A2 2 0 111 8H2m10.59 11.41A2 2 0 1014 16H2m15.73-8.27A2.5 2.5 0 1119 12H2"/></svg>;
        case 5: // Shaleh
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>;
        case 6: // Ibrahim (Api Dingin)
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>;
        case 7: // Luth
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 100-6 3 3 0 000 6z"/></svg>;
        case 8: // Ismail (Zamzam)
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>;
        case 9: // Ishaq
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>;
        case 10: // Yaqub
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>;
        case 11: // Yusuf
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>;
        case 12: // Ayyub
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>;
        case 13: // Syuaib
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006 0 5.002 5.002 0 006 0l-3-9m-3 9V6m0 0l3 1m-3-1l-3 1"/></svg>;
        case 14: // Musa (Tongkat)
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>;
        case 15: // Harun
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>;
        case 16: // Zulkifli
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>;
        case 17: // Daud
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>;
        case 18: // Sulaiman
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>;
        case 19: // Ilyas
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>;
        case 20: // Ilyasa
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>;
        case 21: // Yunus (Ikan Nun)
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>;
        case 22: // Zakariya
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 16h14"/></svg>;
        case 23: // Yahya
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>;
        case 24: // Isa
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>;
        case 25: // Muhammad (Al-Quran)
            return <svg className={iconClass} fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>;
        default:
            return <span className={`text-lg font-bold ${isCompleted ? 'text-black' : 'text-yellow-300'}`}>{urutan}</span>;
    }
}

export default function MapIndex({ prophets = [] }) {
    const { auth } = usePage().props;
    const progress = auth.progress || {};
    const activeNodeRef = useRef(null);

    // Memastikan data nabi selalu mengambil dari database props, atau fallback menggunakan array nama asli
    const dataProphets = prophets.length > 0 ? prophets : LIST_NAMA_NABI.map((nama, i) => ({
        id: i + 1,
        urutan_nabi: i + 1,
        nama_nabi: nama
    }));

    const sortedProphets = [...dataProphets].sort((a, b) => a.urutan_nabi - b.urutan_nabi);

    const CONTAINER_MAX_WIDTH = 500;
    const ROW_HEIGHT = 140;
    const TOTAL_HEIGHT = sortedProphets.length * ROW_HEIGHT + 280;

    const getCoordinates = (index) => {
        const amplitude = 95;
        const x = (CONTAINER_MAX_WIDTH / 2) + Math.sin(index * 0.75) * amplitude;
        const y = index * ROW_HEIGHT + 140;
        return { x, y };
    };

    const generateSvgPath = (endIndex) => {
        if (sortedProphets.length === 0) return '';
        const startCoord = getCoordinates(0);
        let path = `M ${startCoord.x} ${startCoord.y}`;

        for (let i = 1; i <= endIndex; i++) {
            const prev = getCoordinates(i - 1);
            const curr = getCoordinates(i);
            const midY = (prev.y + curr.y) / 2;
            path += ` C ${prev.x} ${midY}, ${curr.x} ${midY}, ${curr.x} ${curr.y}`;
        }
        return path;
    };

    const activeProphetId = sortedProphets.find(p => {
        const pId = p.id;
        const pUrutan = p.urutan_nabi;
        return progress[pId] === 'unlocked' || 
               progress[String(pId)] === 'unlocked' || 
               progress[pUrutan] === 'unlocked' || 
               progress[String(pUrutan)] === 'unlocked';
    })?.id || sortedProphets[0]?.id;

    useEffect(() => {
        if (activeNodeRef.current) {
            activeNodeRef.current.scrollIntoView({
                behavior: 'smooth',
                block: 'center',
            });
        }
    }, []);

    const lastCompletedIndex = sortedProphets.findIndex(p => {
        const pId = p.id;
        const pUrutan = p.urutan_nabi;
        return progress[pId] === 'completed' || 
               progress[String(pId)] === 'completed' || 
               progress[pUrutan] === 'completed' || 
               progress[String(pUrutan)] === 'completed';
    });
    const completedPathIndex = lastCompletedIndex !== -1 ? lastCompletedIndex : 0;

    const fullPathD = generateSvgPath(sortedProphets.length - 1);
    const completedPathD = generateSvgPath(completedPathIndex);

    return (
        <AppLayout>
            <Head title="Peta Perjalanan Nabi" />

            {/* Bagian Header Utama */}
            <div className="relative text-center pt-6 pb-8 px-4 z-20">
                <div className="text-yellow-400 font-serif text-lg md:text-xl tracking-widest mb-3 opacity-90 drop-shadow-[0_2px_10px_rgba(234,179,8,0.4)]">
                    بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ
                </div>
                
                <h1 className="text-3xl md:text-5xl font-black gold-shimmer mb-2 tracking-wide uppercase">
                    Petualangan Para Nabi
                </h1>
                
                <p className="text-sm md:text-base text-yellow-100/90 font-medium">
                    Jelajahi kisah dan mukjizat 25 Nabi secara interaktif.
                </p>
            </div>

            {/* Container Peta Jalur Vertikal */}
            <main className="relative mx-auto w-full max-w-[500px] mb-24" style={{ height: `${TOTAL_HEIGHT}px` }}>
                
                {/* SVG Garis Jalur Emas */}
                <svg 
                    className="absolute inset-0 pointer-events-none z-0"
                    viewBox={`0 0 ${CONTAINER_MAX_WIDTH} ${TOTAL_HEIGHT}`}
                    preserveAspectRatio="none"
                    style={{ width: '100%', height: '100%' }}
                >
                    <path 
                        d={fullPathD} 
                        fill="none" 
                        stroke="#131e32" 
                        strokeWidth="18" 
                        strokeLinecap="round" 
                        strokeLinejoin="round" 
                    />
                    <path 
                        d={completedPathD} 
                        fill="none" 
                        stroke="#eab308" 
                        strokeWidth="18" 
                        strokeLinecap="round" 
                        strokeLinejoin="round" 
                        className="drop-shadow-[0_0_15px_rgba(234,179,8,0.7)] transition-all duration-700"
                    />
                </svg>

                {/* Looping 25 Node Nabi */}
                {sortedProphets.map((prophet, index) => {
                    const { x, y } = getCoordinates(index);
                    const isLeft = x < CONTAINER_MAX_WIDTH / 2;

                    const pId = prophet.id;
                    const pUrutan = prophet.urutan_nabi;

                    let status = 'locked';
                    if (pUrutan === 1) {
                        status = 'unlocked';
                    }

                    if (progress[pId] === 'completed' || 
                        progress[String(pId)] === 'completed' || 
                        progress[pUrutan] === 'completed' || 
                        progress[String(pUrutan)] === 'completed') {
                        status = 'completed';
                    } 
                    else if (progress[pId] === 'unlocked' || 
                             progress[String(pId)] === 'unlocked' || 
                             progress[pUrutan] === 'unlocked' || 
                             progress[String(pUrutan)] === 'unlocked') {
                        status = 'unlocked';
                    }

                    const isCompleted = status === 'completed';
                    const isUnlocked = status === 'unlocked';
                    const isLocked = status === 'locked';

                    const namaNabiClean = prophet.nama_nabi.startsWith('Nabi ') 
                        ? prophet.nama_nabi 
                        : `Nabi ${prophet.nama_nabi}`;

                    return (
                        <div
                            key={prophet.id}
                            ref={isUnlocked ? activeNodeRef : null}
                            className="absolute flex items-center justify-center z-10"
                            style={{
                                left: `${(x / CONTAINER_MAX_WIDTH) * 100}%`,
                                top: `${y}px`,
                                transform: 'translate(-50%, -50%)',
                            }}
                        >
                            {/* Card Informasi */}
                            <div className={`absolute top-1/2 -translate-y-1/2 whitespace-nowrap pointer-events-none transition-all duration-300 ${
                                isLeft ? 'left-full ml-4' : 'right-full mr-4'
                            }`}>
                                <div className={`px-4 py-2 rounded-2xl backdrop-blur-md border transition-all ${
                                    isLocked 
                                    ? 'bg-slate-900/40 border-slate-800 opacity-50' 
                                    : 'bg-black/80 border-yellow-700/60 shadow-[0_4px_20px_rgba(0,0,0,0.6)]'
                                }`}>
                                    <p className={`text-[10px] uppercase tracking-widest font-extrabold ${isLocked ? 'text-slate-600' : 'text-yellow-500'}`}>
                                        Nabi ke-{prophet.urutan_nabi}
                                    </p>
                                    <p className={`text-base font-bold ${isLocked ? 'text-slate-500' : 'text-yellow-100'}`}>
                                        {namaNabiClean}
                                    </p>
                                </div>
                            </div>

                            {/* Node Tombol Utama - Menggunakan URL String Manual dengan Fallback */}
                            {isLocked ? (
                                <div className="group relative focus:outline-none cursor-not-allowed">
                                    <div className="relative z-10 flex items-center justify-center w-16 h-16 rounded-full bg-slate-900/90 border-[4px] border-slate-700 shadow-[0_6px_0_#070e1b] opacity-70 grayscale">
                                        <ProphetIcon urutan={prophet.urutan_nabi} isCompleted={false} isUnlocked={false} />
                                    </div>
                                </div>
                            ) : (
                                <Link 
                                    // 🔥 Fallback: jika id tidak tersedia, gunakan urutan_nabi
                                    href={`/prophet/${prophet.id || prophet.urutan_nabi}/material`}
                                    className="group relative focus:outline-none transform hover:scale-110 transition-transform duration-300"
                                >
                                    {isUnlocked && (
                                        <span className="absolute inset-0 bg-yellow-400 rounded-full animate-ping opacity-20 z-0" style={{ animationDuration: '3s' }}></span>
                                    )}
                                    
                                    <div className={`relative z-10 flex items-center justify-center w-20 h-20 rounded-full transition-all duration-300 ${
                                        isCompleted 
                                            ? 'bg-gradient-to-b from-yellow-300 via-yellow-500 to-yellow-600 border-[5px] border-yellow-200 shadow-[0_6px_0_#a16207,0_0_20px_rgba(234,179,8,0.6)]'
                                            : 'bg-[#0a1526] border-[6px] border-yellow-400 shadow-[0_6px_0_#854d0e,0_0_30px_rgba(234,179,8,0.8)] glow-gold'
                                    }`}>
                                        <ProphetIcon urutan={prophet.urutan_nabi} isCompleted={isCompleted} isUnlocked={isUnlocked} />
                                    </div>
                                </Link>
                            )}
                        </div>
                    );
                })}
            </main>
        </AppLayout>
    );
}