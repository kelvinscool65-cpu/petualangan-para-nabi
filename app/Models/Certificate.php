<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomor_sertifikat',
        'tanggal_tamat',
    ];

    protected $casts = [
        'tanggal_tamat' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}