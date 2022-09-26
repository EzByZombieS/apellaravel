<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestitusiKesehatanLampiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restitusi_kesehatan_lampiran', function (Blueprint $table) {
            $table->id();
            $table->integer('restitusiKesehatanId')->nullable();
            $table->string('judul',50)->nullable();
            $table->string('lampiran',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restitusi_kesehatan_lampiran');
    }
}
