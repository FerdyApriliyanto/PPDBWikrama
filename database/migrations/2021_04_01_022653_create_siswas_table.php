<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('NIS');
            $table->string('Nama');
            $table->string('Jns_kelamin');
            $table->string('Temp_lahir');
            $table->string('Tgl_lahir');
            $table->string('Alamat');
            $table->string('Asal_sekolah');
            $table->integer('Kelas');
            $table->string('Jurusan');
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
        Schema::dropIfExists('siswas');
    }
}
