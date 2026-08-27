<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prophet extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     * Atau gunakan protected $guarded = []; jika ingin semua kolom bisa diisi.
     */
    protected $fillable = [
        'urutan_nabi',
        'nama_nabi',
        'deskripsi',
        'icon_path',
    ];

    /**
     * Relasi ke tabel materials (satu nabi memiliki banyak materi).
     * Foreign key di tabel materials adalah 'prophet_id'.
     */
    public function materials()
    {
        return $this->hasMany(Material::class, 'prophet_id');
    }

    /**
     * Relasi ke tabel questions (satu nabi memiliki banyak soal kuis).
     * Foreign key di tabel questions adalah 'prophet_id'.
     */
    public function questions()
    {
        return $this->hasMany(Question::class, 'prophet_id');
    }
}