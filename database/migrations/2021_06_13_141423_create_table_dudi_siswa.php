<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDudiSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dudi_siswa', function (Blueprint $table) {
            $table->foreignId('siswa_id')->constrained()->cascadeOnDelete();
            $table->foreignId('dudi_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dudi_siswa', function (Blueprint $table) {
            $table->dropIfExists('dudi_siswa');
        });
    }
}
