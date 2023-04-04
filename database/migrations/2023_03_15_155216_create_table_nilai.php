<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('id_siswa');
            $table->integer('id_mapel');
            $table->integer('nilai_tugas');
            $table->integer('nilai_ujian');
            $table->integer('nilai_uts');
            $table->integer('nilai_uas');
            $table->date('tahun_ajaran');
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
        Schema::dropIfExists('table_nilai');
    }
}
