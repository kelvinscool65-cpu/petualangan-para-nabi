import React from 'react';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '', // Wajib dinamai persis seperti ini
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('register'), {
            onFinish: () => reset('password', 'password_confirmation'),
        });
    };

    return (
        <div className="relative min-h-screen bg-[#070b19] text-amber-100 flex flex-col justify-center items-center px-4 font-sans py-10">
            <Head title="Daftar - Petualangan Para Nabi" />

            {/* Tombol Kembali ke Beranda */}
            <div className="absolute top-6 left-6">
                <Link
                    href={route('home')}
                    className="flex items-center gap-2 px-4 py-2 text-xs font-bold tracking-widest text-amber-300 border border-amber-500/40 rounded-lg bg-[#0d1326]/60 hover:bg-amber-500/10 transition backdrop-blur-md shadow-lg"
                >
                    <span>←</span> KEMBALI
                </Link>
            </div>

            {/* Kotak Form Register */}
            <div className="w-full max-w-md bg-[#0d1326]/90 border border-amber-500/30 rounded-2xl p-8 shadow-2xl backdrop-blur-md">
                <div className="text-center mb-6">
                    <h2 className="text-2xl font-bold tracking-wider text-amber-400">DAFTAR PENJELAJAH</h2>
                    <p className="text-xs text-amber-200/60 mt-1">Mulai perjalanan ekspedisi imanmu</p>
                </div>

                <form onSubmit={submit} className="space-y-4">
                    <div>
                        <label className="block text-xs font-semibold text-amber-300 uppercase tracking-widest mb-1">Nama Lengkap</label>
                        <input
                            type="text"
                            value={data.name}
                            onChange={(e) => setData('name', e.target.value)}
                            className="w-full bg-[#03050c] border border-amber-500/30 rounded-lg px-4 py-3 text-amber-100 focus:outline-none focus:border-amber-400 text-sm"
                            required
                        />
                        {errors.name && <p className="text-red-400 text-xs mt-1">{errors.name}</p>}
                    </div>

                    <div>
                        <label className="block text-xs font-semibold text-amber-300 uppercase tracking-widest mb-1">Email</label>
                        <input
                            type="email"
                            value={data.email}
                            onChange={(e) => setData('email', e.target.value)}
                            className="w-full bg-[#03050c] border border-amber-500/30 rounded-lg px-4 py-3 text-amber-100 focus:outline-none focus:border-amber-400 text-sm"
                            required
                        />
                        {errors.email && <p className="text-red-400 text-xs mt-1">{errors.email}</p>}
                    </div>

                    <div>
                        <label className="block text-xs font-semibold text-amber-300 uppercase tracking-widest mb-1">Password</label>
                        <input
                            type="password"
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                            className="w-full bg-[#03050c] border border-amber-500/30 rounded-lg px-4 py-3 text-amber-100 focus:outline-none focus:border-amber-400 text-sm"
                            required
                        />
                        {errors.password && <p className="text-red-400 text-xs mt-1">{errors.password}</p>}
                    </div>

                    <div>
                        <label className="block text-xs font-semibold text-amber-300 uppercase tracking-widest mb-1">Konfirmasi Password</label>
                        <input
                            type="password"
                            value={data.password_confirmation}
                            onChange={(e) => setData('password_confirmation', e.target.value)}
                            className="w-full bg-[#03050c] border border-amber-500/30 rounded-lg px-4 py-3 text-amber-100 focus:outline-none focus:border-amber-400 text-sm"
                            required
                        />
                        {/* 🔥 PENAMBAHAN PENTING: Error untuk password_confirmation */}
                        {errors.password_confirmation && <p className="text-red-400 text-xs mt-1">{errors.password_confirmation}</p>}
                    </div>

                    <button
                        type="submit"
                        disabled={processing}
                        className="w-full py-3 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold rounded-lg hover:from-amber-400 hover:to-amber-500 transition shadow-[0_0_15px_rgba(245,158,11,0.3)] disabled:opacity-50 disabled:cursor-not-allowed mt-2"
                    >
                        DAFTAR SEKARANG
                    </button>
                </form>

                <div className="text-center mt-6 text-xs text-amber-200/60">
                    Sudah punya akun?{' '}
                    <Link href={route('login')} className="text-amber-400 font-bold hover:underline">
                        Masuk di sini
                    </Link>
                </div>
            </div>
        </div>
    );
}