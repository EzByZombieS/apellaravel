<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestitusiKesehatanDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restitusi_kesehatan_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('restitusiKesehatanId')->nullable();
            $table->integer('userId')->nullable();
            $table->integer('statusRestitusiId')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('waktu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restitusi_kesehatan_detail');
    }
}
