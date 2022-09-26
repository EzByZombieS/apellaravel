<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerMbkeuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_mbkeu', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->integer('aktivasiId')->nullable();
            $table->integer('statusJabatanId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manager_mbkeu');
    }
}
