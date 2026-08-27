// resources/js/Pages/Quiz/Show.jsx
import React, { useState } from 'react';
import { Head, useForm, Link } from '@inertiajs/react';
import AppLayout from '@/Layouts/AppLayout';

export default function QuizShow({ prophet, questions = [] }) {
    const [currentIndex, setCurrentIndex] = useState(0);
    const [selectedAnswers, setSelectedAnswers] = useState({});
    const [score, setScore] = useState(0);

    const { data, setData, post, processing } = useForm({
        answers: {},
    });

    const prophetName = prophet?.nama_nabi || 'Pilihan';
    const gelar = prophetName.toLowerCase() === 'muhammad' ? 'SAW' : 'a.s.';

    // 🔥 Gunakan urutan_nabi untuk semua navigasi (konsisten dengan route {prophetId})
    const prophetId = prophet?.urutan_nabi || 1;

    // Jika tidak ada soal, tampilkan pesan
    if (!questions || questions.length === 0) {
        return (
            <AppLayout>
                <Head title={`Kuis - ${prophetName}`} />
                <div className="max-w-2xl mx-auto mt-12 text-center text-amber-100">
                    <h1 className="text-2xl font-bold mb-4">Kuis untuk Nabi {prophetName} belum tersedia.</h1>
                    <Link href={`/prophet/${prophetId}/material`} className="px-6 py-2 bg-amber-500 text-black font-bold rounded-lg">
                        Kembali ke Materi
                    </Link>
                </div>
            </AppLayout>
        );
    }

    const currentQ = questions[currentIndex];
    const totalQuestions = questions.length;
    const answeredCount = Object.keys(selectedAnswers).length;
    const isAllAnswered = answeredCount === totalQuestions;

    const correctKey = (currentQ?.jawaban_benar || 'A').toUpperCase();

    const handleSelectOption = (optionKey) => {
        if (selectedAnswers[currentIndex] !== undefined) return;
        const isCorrect = optionKey.toUpperCase() === correctKey;
        setSelectedAnswers((prev) => ({
            ...prev,
            [currentIndex]: { option: optionKey, isCorrect },
        }));
        if (isCorrect) setScore((prev) => prev + 1);
    };

    const handleSubmit = () => {
        if (!isAllAnswered || processing) return;
        const answerMap = {};
        Object.keys(selectedAnswers).forEach((idx) => {
            const q = questions[parseInt(idx)];
            if (q) answerMap[q.id] = selectedAnswers[idx].option;
        });
        setData('answers', answerMap);
        // 🔥 Gunakan prophetId (urutan_nabi) untuk submit
        post(`/prophet/${prophetId}/quiz`);
    };

    const currentAnswer = selectedAnswers[currentIndex];

    return (
        <AppLayout>
            <Head title={`Kuis - Nabi ${prophetName}`} />
            <div className="max-w-3xl mx-auto px-4 py-10 text-amber-100">
                <div className="text-center mb-8">
                    <p className="text-yellow-400 text-xs tracking-widest uppercase mb-1">Uji Pemahaman Kisah</p>
                    <h1 className="text-3xl font-extrabold text-amber-400">
                        Kuis Nabi {prophetName} {gelar}
                    </h1>
                    <p className="text-sm text-gray-300 mt-1">Soal {currentIndex + 1} dari {totalQuestions}</p>
                    <div className="mt-2 text-xs text-yellow-400/70">
                        Terjawab: {answeredCount} dari {totalQuestions}
                    </div>
                </div>

                {/* Indikator progres */}
                <div className="flex justify-center space-x-2 mb-6 flex-wrap gap-1">
                    {questions.map((q, idx) => (
                        <button
                            key={q.id}
                            onClick={() => setCurrentIndex(idx)}
                            className={`w-8 h-8 rounded-full font-bold text-xs transition-all ${
                                currentIndex === idx
                                    ? 'bg-yellow-500 text-black scale-110 shadow-[0_0_10px_rgba(234,179,8,0.5)]'
                                    : selectedAnswers[idx]
                                    ? 'bg-yellow-700/50 text-yellow-200 border border-yellow-500'
                                    : 'bg-slate-800 text-gray-500 border border-slate-700'
                            }`}
                        >
                            {idx + 1}
                        </button>
                    ))}
                </div>

                {/* Kartu soal */}
                <div className="bg-[#0d1326]/90 border border-amber-500/30 rounded-2xl p-6 md:p-8 shadow-2xl backdrop-blur-md">
                    <h2 className="text-lg md:text-xl font-semibold mb-6 text-gray-100 leading-relaxed">
                        {currentQ.pertanyaan || 'Pertanyaan tidak tersedia.'}
                    </h2>

                    <div className="space-y-3 mb-8">
                        {['A', 'B', 'C', 'D'].map((opt) => {
                            const optionText = currentQ[`opsi_${opt.toLowerCase()}`];
                            if (!optionText) return null;
                            const isSelected = currentAnswer?.option === opt;
                            const isTheCorrectAnswer = opt === correctKey;
                            let btnStyle = 'bg-[#03050c] border-amber-500/30 text-amber-100 hover:bg-amber-500/10';
                            if (currentAnswer) {
                                if (isTheCorrectAnswer) {
                                    btnStyle = 'bg-green-600/30 border-green-500 text-green-200 font-bold shadow-[0_0_15px_rgba(34,197,94,0.4)]';
                                } else if (isSelected && !currentAnswer.isCorrect) {
                                    btnStyle = 'bg-red-600/30 border-red-500 text-red-200 font-bold shadow-[0_0_15px_rgba(239,68,68,0.4)]';
                                }
                            }
                            return (
                                <button
                                    key={opt}
                                    onClick={() => handleSelectOption(opt)}
                                    disabled={currentAnswer !== undefined}
                                    className={`w-full text-left p-4 rounded-xl border transition-all flex items-center justify-between ${btnStyle}`}
                                >
                                    <div className="flex items-center gap-3">
                                        <span className="w-8 h-8 rounded-lg bg-amber-500/20 border border-amber-500/40 flex items-center justify-center font-bold text-amber-400 text-sm">
                                            {opt}
                                        </span>
                                        <span className="text-sm md:text-base">{optionText}</span>
                                    </div>
                                    {currentAnswer && isTheCorrectAnswer && <span className="text-green-400 font-bold text-sm">✓ Benar</span>}
                                    {currentAnswer && isSelected && !currentAnswer.isCorrect && <span className="text-red-400 font-bold text-sm">✕ Salah</span>}
                                </button>
                            );
                        })}
                    </div>

                    {/* Feedback */}
                    {currentAnswer && (
                        <div className={`p-4 rounded-xl mb-6 text-center font-bold text-sm ${
                            currentAnswer.isCorrect
                                ? 'bg-green-950/60 border border-green-500 text-green-300'
                                : 'bg-red-950/60 border border-red-500 text-red-300'
                        }`}>
                            {currentAnswer.isCorrect
                                ? '🎉 Pintar! Jawaban Anda Benar.'
                                : `❌ Kurang tepat. Jawaban yang benar adalah opsi ${correctKey}.`}
                        </div>
                    )}

                    {/* Navigasi */}
                    <div className="flex justify-between items-center">
                        <button
                            onClick={() => setCurrentIndex((prev) => Math.max(0, prev - 1))}
                            disabled={currentIndex === 0}
                            className="px-5 py-2 rounded-full border border-yellow-600/50 text-yellow-400 hover:bg-yellow-600/20 disabled:opacity-30 disabled:cursor-not-allowed transition text-sm"
                        >
                            &larr; Sebelumnya
                        </button>

                        {currentIndex < totalQuestions - 1 ? (
                            <button
                                onClick={() => setCurrentIndex((prev) => Math.min(totalQuestions - 1, prev + 1))}
                                className="px-6 py-2 rounded-full bg-amber-500 text-black font-bold hover:bg-amber-400 transition"
                            >
                                Selanjutnya &rarr;
                            </button>
                        ) : (
                            <button
                                onClick={handleSubmit}
                                disabled={!isAllAnswered || processing}
                                className={`px-8 py-3 rounded-xl font-bold transition shadow-lg ${
                                    isAllAnswered && !processing
                                        ? 'bg-gradient-to-r from-amber-500 to-amber-600 text-slate-950 hover:from-amber-400 hover:to-amber-500 shadow-[0_0_20px_rgba(245,158,11,0.4)]'
                                        : 'opacity-40 cursor-not-allowed bg-gray-700 text-gray-400'
                                }`}
                            >
                                {processing ? 'Memproses...' : 'Kumpulkan Kuis'}
                            </button>
                        )}
                    </div>
                </div>

                {/* Tombol kembali ke materi - gunakan prophetId (urutan_nabi) */}
                <div className="text-center mt-6">
                    <Link href={`/prophet/${prophetId}/material`} className="text-sm text-gray-400 hover:text-yellow-300 transition">
                        &larr; Kembali ke Materi
                    </Link>
                </div>
            </div>
        </AppLayout>
    );
}