<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    // 🔥 KUNCI UTAMA: Mengizinkan seeder memasukkan data tanpa error mass assignment
    protected $guarded = [];

    /**
     * Relasi inverse ke model Prophet.
     * Sebuah materi milik satu nabi.
     */
    public function prophet()
    {
        return $this->belongsTo(Prophet::class, 'prophet_id');
    }
}