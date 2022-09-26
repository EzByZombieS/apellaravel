<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestitusiKesehatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restitusi_kesehatan', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->string('keterangan',50)->nullable();
            $table->dateTime('tanggalPembuatan')->nullable();
            $table->integer('statusRestitusiId')->nullable();
            $table->text('alasan')->nullable();
            $table->double('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restitusi_kesehatan');
    }
}
