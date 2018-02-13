<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_for');

            $table->string('home_judul');
            $table->string('home_deskripsi');
            $table->string('home_tanggal');

            $table->string('intro_judul');
            $table->string('intro_deskripsi');

            $table->string('terbaik_judul');
            $table->string('berprestasi_judul');

            $table->string('stmik_judul');
            $table->string('stmik_deskripsi');

            $table->string('stiba_judul');
            $table->string('stiba_deskripsi');
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
        Schema::dropIfExists('settings');
    }
}
