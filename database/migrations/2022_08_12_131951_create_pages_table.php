<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('position')->nullable();
            $table->string('title',50)->nullable();
            $table->integer('mediaTypeId')->nullable();
            $table->integer('contentLayoutId')->nullable();
            $table->string('image',50)->nullable();
            $table->text('videoEmbed')->nullable();
            $table->text('description')->nullable();
            $table->text('moreDescription')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
