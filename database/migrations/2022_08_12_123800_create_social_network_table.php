<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_network', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->string('title')->nullable();
            $table->string('icon')->nullable();
            $table->string('url')->nullable();
            $table->integer('publishStatusId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_network');
    }
}
