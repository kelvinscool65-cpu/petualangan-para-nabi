<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'progress', // ✅ TAMBAHKAN kolom progress di sini
    ];

    protected $casts = [
    'email_verified_at' => 'datetime',
    'password' => 'hashed',
    'progress' => 'array', // Agar otomatis dikonversi ke JSON
    ];
    /**
     * Atribut yang disembunyikan saat serialisasi.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Mendefinisikan casting atribut.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'progress' => 'array', // ✅ WAJIB: casting ke array/JSON
        ];
    }

    /**
     * Relasi ke model UserProgress (progress pengguna).
     */
    public function progress()
    {
        return $this->hasMany(UserProgress::class);
    }

    /**
     * Relasi ke model QuizResult (hasil kuis pengguna).
     */
    public function quizResults()
    {
        return $this->hasMany(QuizResult::class);
    }

    /**
     * Relasi ke model Certificate (sertifikat pengguna).
     */
    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }
}