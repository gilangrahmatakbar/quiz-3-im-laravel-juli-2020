<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('posisi_id');
            $table->foreign('posisi_id')->references('id')->on('posisi');
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawai');
            $table->unsignedBigInteger('manajer_id');
            $table->foreign('manajer_id')->references('id')->on('manajer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staf');
    }
}
