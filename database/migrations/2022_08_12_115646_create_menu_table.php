<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->integer('position');
            $table->string('menuCaption')->nullable();
            $table->integer('menuBehaviorId')->nullable();
            $table->integer('pagesId')->nullable();
            $table->integer('newsCategoryId')->nullable();
            $table->integer('newsTagId')->nullable();
            $table->text('url')->nullable();
            $table->integer('openUrlOnNewTabId')->nullable();
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
        Schema::dropIfExists('menu');
    }
}
