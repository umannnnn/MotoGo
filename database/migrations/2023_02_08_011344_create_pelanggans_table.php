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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('nama');
            $table->string('nomor_hp');
            $table->string('email');
            $table->text('alamat');
            $table->string('tgl_pesan', 255);
            $table->string('tgl_balik', 255);
            $table->string('nomor_ktp', 255);
            $table->string('foto_ktp');
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
        Schema::dropIfExists('pelanggans');
    }
};
