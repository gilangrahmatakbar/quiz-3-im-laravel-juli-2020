<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManajerTable extends Migration
{

     *
     * @return void
     */
    public function up()
    {
        Schema::create('manajer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('posisi_id');
            $table->foreign('posisi_id')->references('id')->on('posisi');
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawai');
            $table->unsignedBigInteger('proyek_id');
            $table->foreign('proyek_id')->references('id')->on('proyek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manajer');
    }
}
