<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ConclusionController;
use Illuminate\Support\Facades\DB;

// Landing Page dengan Statistik
Route::get('/', function () {
    $user = auth()->user();
    $stats = [
        'nabi_dipelajari' => 0,
        'poin_ekspedisi' => 1240,
        'hari_beruntung' => 12,
    ];

    if ($user) {
        $completedCount = DB::table('user_progress')
            ->where('user_id', $user->id)
            ->where('status', 'completed')
            ->count();
        $stats['nabi_dipelajari'] = $completedCount;
    }

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'stats' => $stats,
    ]);
})->name('home');

// Guest Routes (Auth)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected Routes (Butuh Login)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Peta Timeline
    Route::get('/map', [ProgressController::class, 'map'])->name('map');
    
    // Materi & Kuis per Nabi
    // 🔥 Parameter {prophetId} menghindari Route Model Binding otomatis
    // Controller menerima $prophetId sebagai ID biasa (bukan model)
    Route::get('/prophet/{prophetId}/material', [MaterialController::class, 'show'])->name('prophet.material');
    Route::get('/prophet/{prophetId}/quiz', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/prophet/{prophetId}/quiz', [QuizController::class, 'submit'])->name('quiz.submit');
    
    // Sertifikat
    Route::get('/certificate', [CertificateController::class, 'show'])->name('certificate.show');

    // Halaman Pencerahan (Conclusion)
    Route::get('/prophet/{prophetId}/conclusion', [ConclusionController::class, 'show'])->name('conclusion.show');
    Route::post('/prophet/{prophetId}/advance', [ConclusionController::class, 'advance'])->name('conclusion.advance');
});