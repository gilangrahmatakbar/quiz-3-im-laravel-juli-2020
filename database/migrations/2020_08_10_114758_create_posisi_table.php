<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posisi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('posisi');
            $table->unsignedBigInteger('pegawai_id');
            $table->foreign('pegawai_id')->references('id')->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posisi');
    }
}
