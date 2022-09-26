<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->string('title',50)->nullable();
            $table->string('banner',50)->nullable();
            $table->text('description')->nullable();
            $table->integer('showButtonId')->nullable();
            $table->string('buttonCaption',50)->nullable();
            $table->integer('linkBehaviorId')->nullable();
            $table->integer('pagesId')->nullable();
            $table->integer('newsCategoryId')->nullable();
            $table->integer('newsTagId')->nullable();
            $table->string('url',255)->nullable();
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
        Schema::dropIfExists('banner');
    }
}
