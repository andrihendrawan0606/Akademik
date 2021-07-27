<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrinilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrinilai', function (Blueprint $table) {
            $table->id();
            $table->string('mapel');
            $table->string('kd325');
            $table->string('kd326');
            $table->string('kd327');
            $table->string('kd328');
            $table->string('kd329');
            $table->string('kd330');
            $table->string('kd331');
            $table->string('kd332');
            $table->string('kd333');
            $table->string('kd334');
            $table->integer('uts');
            $table->integer('uas');
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
        Schema::dropIfExists('entrinilai');
    }
}
