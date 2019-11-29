<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_project');
            $table->bigInteger('users_id')->unsigned();;
            $table->string('jenis_cabai');
            $table->string('lama_pemodalan');
            $table->integer('dana_target');
            $table->integer('dana_terkumpul')->default(0);
            $table->string('resiko_pemodalan');
            $table->integer('jumlah_proyek');
            $table->string('skema');
            $table->string('periode');
            $table->date('start');
            $table->date('end');
            $table->integer('gambar');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
