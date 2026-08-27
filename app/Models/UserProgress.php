<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    use HasFactory;

    protected $table = 'user_progress';

    protected $fillable = [
        'user_id',
        'nabi_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prophet()
    {
        return $this->belongsTo(Prophet::class, 'nabi_id');
    }
}