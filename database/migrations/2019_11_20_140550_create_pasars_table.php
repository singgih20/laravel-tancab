<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('cp_koperasi')->nullable();
            $table->string('lokasi');
            $table->integer('jumlah_pedagang')->default(1);
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('pasars');
    }
}
