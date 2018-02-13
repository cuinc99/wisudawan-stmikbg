<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWisudawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisudawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim')->unique();
            $table->string('password');
            $table->string('p');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('hp');
            $table->string('ipk');
            $table->string('email');
            $table->string('judul');
            $table->integer('prodi_id');
            $table->integer('angkatan_id');
            $table->integer('dosen_id');
            $table->string('photo')->nullable();
            $table->boolean('terbaik')->default(false);
            $table->boolean('berprestasi')->default(false);
            $table->rememberToken();
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
        Schema::drop('wisudawans');
    }
}
