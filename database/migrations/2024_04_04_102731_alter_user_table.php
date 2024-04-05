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
        //
        Schema::table('users', function(Blueprint $table){
            $table->text('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('nomor_sim')->nullable();
            $table->string('role')->default('pengguna'); // admin, pengguna
            $table->boolean('is_deleted')->default(0);
            $table->datetime('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
