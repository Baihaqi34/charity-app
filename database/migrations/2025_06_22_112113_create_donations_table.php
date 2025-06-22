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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');         // siapa yang donasi
            $table->foreignId('campaign_id')->constrained('campaign')->onDelete('cascade');
            $table->integer('amount');                                                // jumlah donasi
            $table->string('order_id')->unique();                                     // ID transaksi (untuk Midtrans)
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending'); // status pembayaran
            $table->text('note')->nullable();                                         // pesan dari pendonasi (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
