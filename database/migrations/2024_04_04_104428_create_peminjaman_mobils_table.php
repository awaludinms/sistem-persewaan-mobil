<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman_mobils', function (Blueprint $table) {
            $table->id();
            $table->datetime('tanggal_mulai');
            $table->datetime('tanggal_selesai');
            $table->integer('mobil_id');
            $table->integer('user_id');
            $table->boolean('status_peminjaman');
            $table->decimal('jumlah_biaya_sewa');
            $table->integer('durasi_sewa'); // 
            $table->datetime('tanggal_dikembalikan');
            $table->boolean('is_deleted')->default(0);
            $table->datetime('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_mobils');
    }
};
