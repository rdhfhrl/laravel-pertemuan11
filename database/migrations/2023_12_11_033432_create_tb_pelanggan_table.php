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
            $table->unsignedInteger('pel_id_gol');
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan');
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->string('pel_alamat', 255);
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50);
            $table->string('pel_seri', 50);
            $table->string('pel_meteran', 11);
            $table->enum('pel_aktif', ['Y', 'N']);
            $table->unsignedInteger('pel_id_user');
            $table->foreign('pel_id_user')->references('user_id')->on('tb_users');
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
 