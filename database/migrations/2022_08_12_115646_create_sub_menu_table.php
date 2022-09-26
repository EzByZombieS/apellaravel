<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu', function (Blueprint $table) {
            $table->id();
            $table->integer('menuId');
            $table->string('subMenuCaption')->nullable();
            $table->integer('subMenuBehaviorId')->nullable();
            $table->integer('pagesId')->nullable();
            $table->integer('newsCategoryId')->nullable();
            $table->integer('newsTagId')->nullable();
            $table->text('url')->nullable();
            $table->integer('openUrlOnNewTabId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_menu');
    }
}
