<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafHasProyek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf_has_proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('proyek_id');
            $table->foreign('proyek_id')->references('id')->on('proyek');
            $table->unsignedBigInteger('staf_id');
            $table->foreign('staf_id')->references('id')->on('staf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staf_has_proyek');
    }
}
