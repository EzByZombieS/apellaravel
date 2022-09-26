<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestitusiKesehatanAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restitusi_kesehatan_admin', function (Blueprint $table) {
            $table->id();
            $table->integer('restitusiKesehatanId')->nullable();
            $table->integer('userId')->nullable();
            $table->string('catatan',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restitusi_kesehatan_admin');
    }
}
