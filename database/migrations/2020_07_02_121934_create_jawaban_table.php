<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
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
        Schema::dropIfExists('jawaban');
    }
}
