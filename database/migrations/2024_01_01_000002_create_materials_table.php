// File: database/migrations/2024_01_01_000002_create_materials_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prophet_id')->constrained('prophets')->onDelete('cascade');
            $table->integer('bab_ke');
            $table->string('judul_bab');
            $table->longText('teks')->nullable();
            $table->string('audio_path')->nullable();
            $table->string('video_url')->nullable(); // Digunakan khusus untuk bab terakhir
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};