<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansi', function (Blueprint $table) {
            $table->id();
            $table->string('namaInstansi',100)->nullable();
            $table->string('logoInstansi',100)->nullable();
            $table->string('location',100)->nullable();
            $table->text('address')->nullable();
            $table->string('phoneNumber',100)->nullable();
            $table->string('website',255)->nullable();
            $table->integer('kodeInstansiId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instansi');
    }
}
