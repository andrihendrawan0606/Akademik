<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kelas');
            $table->enum('nama_kelas',['XI RPL 1','XI RPL 2','XI RPL 3','XI TKJ 1','XI TKJ 2','XI TKJ 3','XI BC 1','XI BC 2','XI BC 3','XI MM 1','XI MM2','XI MM3','XI TEI']);
            $table->string('guru');
            $table->integer('ruangan');
            $table->enum('jurusan',['Rekayasa Perangkat Lunak','Multimedia','Brodcast','Teknik Komputer dan Jaringan','Teknik Elektronika Industri']);
            $table->string('jumlah_siswa');
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
        Schema::dropIfExists('kelas');
    }
}
