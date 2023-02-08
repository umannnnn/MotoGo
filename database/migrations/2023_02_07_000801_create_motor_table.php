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
        Schema::create('motor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('merkMotor');
            $table->string('bahanBakar');
            $table->string('mesin');
            $table->text('warna');
            $table->string('speedometer');
            $table->foreignId('category_id');
            $table->integer('tahunKeluaran');
            $table->text('review');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
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
        Schema::dropIfExists('motor');
    }
};
