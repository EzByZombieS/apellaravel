<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foot_links', function (Blueprint $table) {
            $table->id();
            $table->integer('footContentId')->nullable();
            $table->integer('linkBehaviorId')->nullable();
            $table->string('linkCaption',50)->nullable();
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
        Schema::dropIfExists('foot_links');
    }
}
