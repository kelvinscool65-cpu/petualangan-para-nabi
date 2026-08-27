// File: database/migrations/2024_01_01_000001_create_prophets_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prophets', function (Blueprint $table) {
            $table->id();
            $table->integer('urutan_nabi')->unique();
            $table->string('nama_nabi');
            $table->text('deskripsi')->nullable();
            $table->string('icon_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prophets');
    }
};