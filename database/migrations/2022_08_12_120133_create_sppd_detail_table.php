<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppdDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppd_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('sppdId')->nullable();
            $table->integer('userId')->nullable();
            $table->integer('statusSppdId')->nullable();
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
        Schema::dropIfExists('sppd_detail');
    }
}
