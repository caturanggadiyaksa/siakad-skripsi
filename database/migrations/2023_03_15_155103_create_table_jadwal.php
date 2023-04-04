<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_jadwal', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kelas');
            $table->integer('id_mapel');
            $table->integer('id_guru');
            $table->string('hari');
            $table->string('jam-mulai');
            $table->string('jam-selesai');
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
        Schema::dropIfExists('table_jadwal');
    }
}
