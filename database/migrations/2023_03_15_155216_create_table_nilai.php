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
            $table->integer('id_kelas');
            $table->string('no_induk_siswa');
            $table->integer('id_pelajaran');
            $table->integer('tugas');
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
        Schema::dropIfExists('table_nilai');
    }
}
