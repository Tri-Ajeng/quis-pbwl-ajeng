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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->foreignId('pel_id_user')->nullable();
            $table->foreignId('pel_id_gol')->nullable();
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->string('pel_alamat');
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50)->nullable();
            $table->string('pel_seri', 50)->nullable();
            $table->string('pel_meteran', 11)->nullable();
            $table->string('pel_aktif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
