// File: resources/js/Layouts/AppLayout.jsx
import React, { useState, useEffect } from 'react';
import { Link, usePage } from '@inertiajs/react';

export default function AppLayout({ children }) {
    const { auth, flash } = usePage().props;
    const [showAlert, setShowAlert] = useState(true);

    useEffect(() => {
        if (flash?.message || flash?.error) {
            setShowAlert(true);
            const timer = setTimeout(() => {
                setShowAlert(false);
            }, 5000); // Pesan otomatis hilang setelah 5 detik
            return () => clearTimeout(timer);
        }
    }, [flash]);

    return (
        <div className="min-h-screen bg-[#070e1b] text-sand flex flex-col selection:bg-yellow-500 selection:text-gray-900">
            {/* Navbar Atas */}
            <nav className="border-b border-yellow-700/30 bg-[#070e1b]/90 backdrop-blur-md sticky top-0 z-50">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex justify-between h-16 items-center">
                        <Link href={auth.user ? "/map" : "/"} className="text-xl font-bold gold-shimmer tracking-wider">
                            Petualangan Para Nabi
                        </Link>
                        <div>
                            {auth.user ? (
                                <div className="flex items-center space-x-6">
                                    <span className="text-sm font-medium text-yellow-100">
                                        Halo, <span className="text-yellow-400 font-bold">{auth.user.nama_lengkap}</span>
                                    </span>
                                    <Link href="/certificate" className="text-sm hover:text-yellow-400 transition font-medium">Sertifikat</Link>
                                    <Link href="/logout" method="post" as="button" className="text-sm text-red-400 hover:text-red-300 transition font-medium">
                                        Keluar
                                    </Link>
                                </div>
                            ) : (
                                <div className="space-x-4">
                                    <Link href="/login" className="text-sm hover:text-yellow-400 transition">Masuk</Link>
                                    <Link href="/register" className="text-sm px-4 py-2 border border-yellow-500 rounded-full hover:bg-yellow-500 hover:text-gray-900 transition font-medium">Daftar</Link>
                                </div>
                            )}
                        </div>
                    </div>
                </div>
            </nav>

            {/* Flash Messages dengan Auto-Dismiss Timer */}
            {showAlert && flash?.message && (
                <div className="bg-emerald-800/90 border border-emerald-500 text-white text-center py-2 px-4 shadow-xl backdrop-blur-sm fixed top-16 w-full z-40 transition-all duration-500">
                    {flash.message}
                </div>
            )}
            {showAlert && flash?.error && (
                <div className="bg-red-900/90 border border-red-500 text-white text-center py-2 px-4 shadow-xl backdrop-blur-sm fixed top-16 w-full z-40 transition-all duration-500">
                    {flash.error}
                </div>
            )}

            <main className="flex-grow w-full max-w-7xl mx-auto sm:px-6 lg:px-8 pt-6 pb-16">
                {children}
            </main>
        </div>
    );
}