import React from 'react';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    return (
        <div className="relative min-h-screen bg-[#070b19] text-amber-100 flex flex-col justify-center items-center px-4 font-sans">
            <Head title="Masuk - Petualangan Para Nabi" />

            {/* Tombol Kembali ke Beranda */}
            <div className="absolute top-6 left-6">
                <Link
                    href={route('home')}
                    className="flex items-center gap-2 px-4 py-2 text-xs font-bold tracking-widest text-amber-300 border border-amber-500/40 rounded-lg bg-[#0d1326]/60 hover:bg-amber-500/10 transition backdrop-blur-md shadow-lg"
                >
                    <span>←</span> KEMBALI
                </Link>
            </div>

            {/* Kotak Form Login */}
            <div className="w-full max-w-md bg-[#0d1326]/90 border border-amber-500/30 rounded-2xl p-8 shadow-2xl backdrop-blur-md">
                <div className="text-center mb-6">
                    <h2 className="text-2xl font-bold tracking-wider text-amber-400">MASUK PENJELAJAH</h2>
                    <p className="text-xs text-amber-200/60 mt-1">Lanjutkan kembali ekspedisi imanmu</p>
                </div>

                {status && <div className="mb-4 text-sm font-medium text-green-400 text-center">{status}</div>}

                <form onSubmit={submit} className="space-y-4">
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

                    {/* Remember Me (opsional, sesuai useForm) */}
                    <div className="flex items-center justify-between">
                        <label className="flex items-center gap-2 text-xs text-amber-300/80">
                            <input
                                type="checkbox"
                                checked={data.remember}
                                onChange={(e) => setData('remember', e.target.checked)}
                                className="w-4 h-4 rounded border-amber-500/40 bg-[#03050c] text-amber-500 focus:ring-amber-400 focus:ring-offset-0"
                            />
                            Ingat saya
                        </label>
                        {canResetPassword && (
                            <Link
                                href={route('password.request')}
                                className="text-xs text-amber-400/70 hover:text-amber-300 transition"
                            >
                                Lupa password?
                            </Link>
                        )}
                    </div>

                    <button
                        type="submit"
                        disabled={processing}
                        className="w-full py-3 bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 font-bold rounded-lg hover:from-amber-400 hover:to-amber-500 transition shadow-[0_0_15px_rgba(245,158,11,0.3)] disabled:opacity-50 disabled:cursor-not-allowed"
                    >
                        MASUK
                    </button>
                </form>

                <div className="text-center mt-6 text-xs text-amber-200/60">
                    Belum punya akun?{' '}
                    <Link href={route('register')} className="text-amber-400 font-bold hover:underline">
                        Daftar di sini
                    </Link>
                </div>
            </div>
        </div>
    );
}