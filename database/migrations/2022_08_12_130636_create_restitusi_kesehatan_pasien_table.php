<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestitusiKesehatanPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restitusi_kesehatan_pasien', function (Blueprint $table) {
            $table->id();
            $table->integer('restitusiKesehatanId')->nullable();
            $table->date('tanggalKwitansi')->nullable();
            $table->string('namaPasien',100)->nullable();
            $table->double('nilaiKwitansi')->nullable();
            $table->text('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restitusi_kesehatan_pasien');
    }
}
