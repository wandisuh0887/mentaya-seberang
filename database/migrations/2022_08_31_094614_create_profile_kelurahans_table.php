<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kades')->nullable();
            $table->string('foto_kades')->nullable();
            $table->text('sambutan_kades')->nullable();
            $table->string('foto_kelurahan')->nullable();
            $table->text('profile_singkat')->nullable();
            $table->integer('jumlah_penduduk_pria')->default(0);
            $table->integer('jumlah_penduduk_wanita')->default(0);
            $table->integer('jumlah_kk')->default(0);
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_kelurahan');
    }
};
