<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsLarahub extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('idpertanyaan');
            $table->string('judul');
            $table->string('isi');
            $table->string('tanggal_pembuatan');
            $table->string('tanggal_update');
            
            $table->timestamps();
        });

        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('idjawaban');
            $table->string('judul');
            $table->string('isi');
            $table->string('tanggal_pembuatan');
            $table->string('tanggal_update');
            $table->integer('idpertanyaan');
            
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
        Schema::dropIfExists('items_larahub');
    }
}
